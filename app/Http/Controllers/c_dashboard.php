<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class c_dashboard extends Controller
{
  public function dashboard(){
    return view('V_Dashboard');
  }
  public function profile(){
    return view('profil');
  }
  public function about(){
    return view('aboutus');
  }

}
