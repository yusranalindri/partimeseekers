<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pelamar;
use Carbon\Carbon;

class c_daftar_pelamar extends Controller
{
    public function daftar_pelamar(){
        return view('daftar-pelamar');
      }
    public function store(Request $request)
      {
          $this->validate(request(), [
              'name' => ['required', 'string', 'max:50'],
              'alamat' => ['required', 'string', 'max:100'],
              'tglahir' => ['required', 'date'],
              'pekerjaan' => ['required', 'string'],
              'pendidikan' => ['required', 'string'],
              'phone' => ['required', 'numeric', 'digits_between:10,15'],
              'email' => ['required', 'string', 'email', 'max:80', 'unique:users'],
              'username' => ['required', 'string', 'string', 'max:20'],
              'password' => ['required', 'string', 'min:8', 'confirmed', 'max:20'],
              'ktp' => 'required|mimes:jpeg,jpg,png|max:5000',
          ]);
          $file = $request->file('ktp');
          $name = Carbon::now()->format('Y-m-d') . '.' . $file->getClientOriginalExtension();
          $path = $file->move('uploads',$name);
          $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'role'=>3
          ]);
          $pelamar = Pelamar::create([
            'user_id' => $user->id,
            'tgl_lahir' => Carbon::parse($request->tglahir),
            'pekerjaan' => $request->pekerjaan,
            'pendidikan' => $request->pendidikan,
            'ktp' => $path,
          ]);
          auth()->login($user);
          return redirect()->to('/dashboard');
      }
}

