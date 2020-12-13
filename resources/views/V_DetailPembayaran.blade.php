@extends('layouts.master-admin')
@section('contents')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <img src="{{asset('storage/transfer/'.$pembelian_paket->bukti_transfer)}}" alt="" style="max-height: 400px">

                <form action="{{route('verifikasipembelian',$pembelian_paket->id)}}" method="post">
                    @method('put')
                    @csrf
                    <select name="status" id="" class="form-control mt-2 mb-2">
                        <option value="0">Menunggu</option>
                        <option value="1">Diterima</option>
                        <option value="2">Ditolak</option>
                    </select>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
