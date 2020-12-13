<?php

namespace App\Http\Controllers;

use App\Paket;
use App\PembelianPaket;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class paketlowongan extends Controller
{
  public function tambah(){
    return view('V_TambahPaketLowongan');
  }

  public function paketlowongan()
  {
    $pakets =  Paket::get();
    return view('V_PaketLowongan',['pakets'=>$pakets]);
  }

  public function store(Request $request)
  {
	// insert data ke table pegawai
	DB::table('pakets')->insert([
		'name_paket' => $request->name_paket,
		'harga_paket' => $request->harga_paket,
		'durasi' => $request->durasi
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/paketlowongan');
  }

  public function viewedit(){
    return view('editpaket');
  }

  public function edit($id)
  {
	// mengambil data pegawai berdasarkan id yang dipilih
	$pakets = Paket::findOrFail($id);
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('V_EditPaketLowongan',['p' => $pakets]);
  }

  public function update(Request $request)
  {
	// update data pegawai
	DB::table('pakets')->where('id',$request->id)->update([
		'name_paket' => $request->name_paket,
		'harga_paket' => $request->harga_paket,
		'durasi' => $request->durasi
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/paketlowongan');
  }

  // method untuk hapus data pegawai
  public function hapus($id)
  {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pakets')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/paketlowongan');
  }

  public function beli($id){
      PembelianPaket::create([
          'paket_id'=>$id,
          'mitra_id'=>Auth::user()->mitra->id,
          'status_pembelian_id'=>0
      ]);
      return redirect('/paketlowongan');
  }

}
