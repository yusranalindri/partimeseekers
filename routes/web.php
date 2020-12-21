<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/', 'indexcontroller@index')->name('index');
Route::get('/daftar_pelamar', 'c_daftar_pelamar@daftar_pelamar')->name('daftar-pelamar');
Route::post('/daftar_pelamar', 'c_daftar_pelamar@store')->name('pelamar.store')
;
Route::get('/daftar_mitra', 'c_daftar_mitra@daftar_mitra')->name('daftar-mitra');
Route::post('/daftar_mitra', 'c_daftar_mitra@store')->name('mitra.store')
;
Route::get('/dashboard', 'c_dashboard@dashboard')->name('dashboard');
Route::get('/profile', 'c_dashboard@profile')->name('profile');
Route::get('/about', 'c_dashboard@about')->name('aboutus');
Route::get('/paketlowongan', 'c_dashboard@paketlowongan')->name('paketlowongan');

Route::get('/tambahpaket', 'paketlowongan@tambahpaket')->name('tambahpaket');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'C_Profile@view')->name('view-profile');


Route::group(['middleware' => 'auth'], function () {
    Route::get('profile/edit', 'C_Profile@edit')->name('profile.edit');
    Route::patch('profile/update', 'C_Profile@update')->name('profile.update');
});

Route::get('/paketlowongan', 'paketlowongan@paketlowongan')->name('paketlowongan');
Route::get('/paketlowongan/tambah', 'paketlowongan@tambah')->name('tambahpaket');
Route::post('/paketlowongan/store', 'paketlowongan@store')->name('inputpaket');
Route::get('/paketlowongan/edit/{id}', 'paketlowongan@edit')->name('editpaket');
Route::post('/paketlowongan/update', 'paketlowongan@update')->name('updatepaket');
Route::get('/paketlowongan/hapus/{id}', 'paketlowongan@hapus')->name('hapuspaket');
Route::get('/paketlowongan/beli/{id}', 'paketlowongan@beli')->name('belipaket');

Route::resource('pembelian','C_Pembelian');

Route::get('/paketlowongan/pembelian_paket','daftarpembayaran@pembelian')->name('pembelianpaket');
Route::get('/paketlowongan/pembelian_paket/detail/{id}','daftarpembayaran@detailpembayaran')->name('detailpembelian');
Route::put('/paketlowongan/pembelian_paket/detail/{id}','daftarpembayaran@verifikasi')->name('verifikasipembelian');
//Route::get('/paketlowongan/pembelian_paket/verifikasi','daftarpembayaran@verifikasi')->name('verifikasipembelian');

Route::get('/paket_lowongans', 'paketlowonganmitra@lowonganmitra')->name('lowonganmitra');
Route::get('/paket_lowongans/status_transaksi','paketlowonganmitra@pembelian')->name('pembelianmitra');
Route::get('/paket_lowongans/upload_bukti','paketlowonganmitra@bukti')->name('buktitransaksimitra');
Route::post('/paket_lowongans/store', 'paketlowonganmitra@store')->name('uploadbukti');

Route::get('/pilihpaket/form', 'pembayaranpaket_mitra@pilih')->name('pembayaran.pilih');
Route::patch('profile/update', 'C_Profile@update')->name('profile.update');
Route::get('/pilihpaket/form/infopembayaran', 'infopembayaran@info')->name('infopembayaran');



Route::get('/lowongan','C_Lowongan@index')->name('lowongan');
Route::get('/lowongan/detail/{id}','c_LowonganPelamar@show')->name('lowongan-detail');
Route::get('/lowongan/create','C_TambahLowongan@create')->name('tambah-lowongan');
Route::post('/lowongan/create','C_TambahLowongan@store')->name('store-lowongan');

Route::get('/lowongan/edit/{id}','C_UbahLowongan@edit')->name('edit-lowongan');
Route::put('/lowongan/edit/{id}','C_UbahLowongan@update')->name('update-lowongan');

Route::get('/lowongan/verify/{id}','C_DetailLowongan@edit')->name('show-lowongan');
Route::put('/lowongan/verify/{id}','C_DetailLowongan@update')->name('verify-lowongan');

Route::get('/mitra','C_Mitra@index')->name('mitra');
Route::get('/mitra/detail/{id}','C_Mitra@show')->name('mitra-detail');

Route::get('/lowonganPelamar','c_LowonganPelamar@index')->name('lowongan-pelamar');

Route::get('/berkaslamaran','C_BerkasLamaran@index')->name('berkaslamaran');
Route::post('/berkaslamaran/upload','C_BerkasLamaran@store')->name('uploadberkas');
Route::get('/berkaslamaran/detail','C_BerkasLamaran@berkas')->name('detaillamaran');

Route::get('/lamaran','C_Lamaran@index')->name('lamaran');
Route::get('/lamaran/detail/{id}','C_DetailLamaran@index')->name('lihatlamaran');

