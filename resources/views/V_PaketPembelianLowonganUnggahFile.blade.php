@extends('layouts.master-admin')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Pilihan Paket </h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <form action="{{route('pembelian.update',$id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        Unggah Bukti
                        <input type="file" class="form-control mt-2 mb-2" name="file">
                        <input type="submit" class="btn-success btn" value="Submit" style="color: white">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
