<?php

namespace App\Http\Controllers;
use App\Mitra;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class C_Profile extends Controller
{
    public function edit(Request $request)
    {
        return view('V_EditProfile', [
            'user' => $request->user()
        ]);
    }
    public function update(Request $request){
        Mitra::whereUserId(Auth::id())->update(['bidang'=> $request->bidang]);
        $request->user()->update(
            $request->all()
        );
        return redirect()->route('profile.edit');
    }
    public function view(){
        return view('V_Profile');
    }

}
