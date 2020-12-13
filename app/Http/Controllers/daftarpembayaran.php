<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Paket;
use App\PembelianPaket;
use App\StatusPembelian;

class daftarpembayaran extends Controller
{
    // public function pembelian(){
    // 	// mengambil data dari table pegawai
    // 	$detail = DB::table('pembelian_pakets')->get();

    // 	// mengirim data pegawai ke view index
    // 	return view('daftarpembayaran',['pembelian_pakets' => $detail]);

    // }

//   public function detailpembayaran(Request $request)
//     {
//         // mengambil data dari table pegawai
//     	$pembelian_paket = DB::table('pembelian_pakets')->get();

//     	// mengirim data pegawai ke view index
//     	return view('detailtransaksi',['pembelian_pakets' => $pembelian_paket]);

//     }
    public function detailpembayaran($id)
    {
        // mengambil data dari table pegawai
    	$pembelian_paket = PembelianPaket::findOrFail($id);

    	// mengirim data pegawai ke view index
    	return view('V_DetailPembayaran',['pembelian_paket' => $pembelian_paket]);

    }
    public function pembelian(){
        $paket = Paket::all();
        $pembelianp = PembelianPaket::all();
        $statuspembelian = StatusPembelian::all();
        return view('V_DaftarPembayaran',compact('paket','pembelianp','statuspembelian'));
    }
    public function verifikasi(Request $request,$id)
    {
	// update data pegawai
//	DB::table('pembelian_pakets')->where('id',$request->id)->update([
//		'status_pembelian' => $request->verifikasi
//	]);
//	// alihkan halaman ke halaman pegawai
        PembelianPaket::find($id)->update(['status_pembelian_id'=>$request->status]);
	return redirect('/paketlowongan/pembelian_paket');
    }
}
