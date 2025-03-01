<?php

namespace App\Http\Controllers;
use App\ApplyLowongan;
use App\StatusPembelian;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class C_DetailLamaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $applylowongan= ApplyLowongan::find($id);
           // mengambil data dari table pegawai
        $apply_lowongan = ApplyLowongan::findOrFail($id);
        $statuspembelian = StatusPembelian::all();
        // $apply = ApplyLowongan::all();
        // mengirim data pegawai ke view index
        return view('V_DetailLamaran',compact('applylowongan','statuspembelian'),['apply_lowongan' => $apply_lowongan]);
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
        //
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
    public function update(Request $request,$id)
    {
        $this->validate(request(), [
            // // 'lowongan_id' => 'required|min:2',
            // // 'pelamar_id'=> 'required|string',
            // 'Status' => 'required|string',
            'status' => 'required'
        ]);
        $applylowongan = ApplyLowongan::find($id);
        $applylowongan->status = $request->status;
        $applylowongan->save();

        return redirect('/lamaran_mitra');
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
