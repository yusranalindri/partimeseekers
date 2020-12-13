<?php

namespace App\Http\Controllers;

use App\Lowongan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_Lowongan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $status=Auth::user()->mitra->pembelianPakets;
        $last=[];
        foreach ($status as $s){
            array_push($last,$s->updated_at->addDays($s->paket->durasi));
        }
        sort($last);
        $a=$last[count($last)-1];

//        if ($a->greaterThan(Carbon::now())){
//            dd($a);
//        }
        if (Auth::user()->role==1){
            $lowongans = Lowongan::get();
        }else{
            $lowongans = Lowongan::whereMitraId(Auth::user()->mitra->id)->get();
        }

//        dd($lowongans);
        return view('V_Lowongan',compact('lowongans','a'));
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
