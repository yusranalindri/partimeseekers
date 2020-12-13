<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Paket;
use App\PembelianPaket;
use App\StatusPembelian;

class paketlowonganmitra extends Controller
{
    public function lowonganmitra(){
        $pakets =  DB::table('pakets')->get();
        return view('paketlowongan-mitra',['pakets'=>$pakets]);
      }
      public function pembelian(){
        $paket = Paket::all();
        $pembelianp = PembelianPaket::all();
        $statuspembelian = StatusPembelian::all();
        return view('statuspembayaran-mitra',compact('paket','pembelianp','statuspembelian'));
    }
    public function bukti(){
        return view('uploadbukti-mitra');
    }
    public function store(Request $request)
      {
          $this->validate(request(), [
              'bukti' => 'required|mimes:jpeg,jpg,png|max:5000',
          ]);
          $file = $request->file('bukti');
          $name = Carbon::now()->format('Y-m-d') . '.' . $file->getClientOriginalExtension();
          $path = $file->move('uploads',$name);
          $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => bcrypt($request->password),
          ]);
          $pembelianpaket = PembelianPaket::create([
            'user_id' => $user->id,
            'tgl_lahir' => Carbon::parse($request->tglahir),
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'bukti' => $path,
          ]); 
          auth()->login($user);
          return redirect()->to('/dashboard');
      }
}

