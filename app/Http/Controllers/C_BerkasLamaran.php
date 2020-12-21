<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ApplyLowongan;
use App\Lowongan;
use App\Pelamar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class C_BerkasLamaran extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $namalowongan = Lowongan::all();
        return view('v_BerkasLamaran', compact('namalowongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(), [
              // // 'lowongan_id' => 'required|min:2',
              // // 'pelamar_id'=> 'required|string',
              // 'Status' => 'required|string',
              'berkas' => 'required|mimes:jpeg,jpg,png|max:5000'
          ]);
          $file = $request->file('berkas');
        //   $name = Carbon::now()->format('Y-m-d') . '.' . $file->getClientOriginalExtension();
          $file->move('uploads/',$request->file('berkas')->getClientOriginalName());
          $path = $request->file('berkas')->getClientOriginalName();
          $berkas = new ApplyLowongan;
          $berkas -> berkas = $path;
          // $berkas -> pelamar_id = 1;
          // $berkas -> lowongan_id = 5;
        //   dd(Auth::user());
            $berkas-> pelamar_id = Auth::user()->pelamars->first()->id;
            $berkas-> lowongan_id = $request->namalowongan;
            $berkas-> status = 0;
          // $berkas -> ApplyLowongan::whereUserId(Auth::user()->pelamar->id)->get();;
          // $berkas -> Lowongan::whereLowongan(Auth::lowongan()->id)->get();;
            $berkas -> save();
        //   $path = $file->move('uploads',$name);
        //   $apply = ApplyLowongan::create([
        //     'berkas' => $path
        //   ]);
          return redirect('/lowonganPelamar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
