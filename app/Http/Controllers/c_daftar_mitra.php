<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mitra;


class c_daftar_mitra extends Controller
{
  public function daftar_mitra(){
    return view('daftar-mitra');
  }
  public function store(Request $request)
    {
        $this->validate(request(), [
            'namaperusahaan' => ['required', 'string', 'max:50'],
            'alamat' => ['required', 'string', 'max:100'],
            'bidang' => ['required', 'string', 'max:12'],
            'phone' => ['required', 'numeric', 'digits_between:10,15'],
            'email' => ['required', 'string', 'email', 'max:80', 'unique:users'],
            'username' => ['required', 'string', 'string', 'max:20'],
            'password' => ['required', 'string', 'min:8', 'confirmed', 'max:20'],
        ]);

        $user = User::create([
          'name' => $request->namaperusahaan,
          'email' => $request->email,
          'alamat' => $request->alamat,
          'phone' => $request->phone,
          'username' => $request->username,
          'password' => bcrypt($request->password),
          'role'=>2
        ]);
        $mitra = Mitra::create([
          'user_id' => $user->id,
          'bidang' => $request->bidang,
        ]);
        auth()->login($user);
        return redirect()->to('/dashboard');
    }
}
