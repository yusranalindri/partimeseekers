<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_UbahLowongan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('V_TambahLowongan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $lowongan=Lowongan::findOrFail($id);
        return view('V_EditLowongan',compact('lowongan'));
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
        $this->validate(request(), [
            'nama_lowongan' => ['required', 'string', 'max:100'],
            'jabatan' => ['required', 'string', 'max:100'],
            'upah' => ['required', 'numeric'],
            'kriteria' => ['required', 'string'],
            
        ]);
        $data=$request->all();
        $data['status']=0;
        Lowongan::find($id)->update($data);
        return redirect(route('lowongan'));
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
