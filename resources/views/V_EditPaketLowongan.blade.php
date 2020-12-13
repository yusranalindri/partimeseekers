@extends('layouts.master-admin')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Buat Paket </h4>
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

                    <form action="{{route('updatepaket')}}" method="post">
                        @csrf
                        <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama paket</label>
                            <input name="name_paket" value="{{ $p->name_paket }}" type="text" class="form-control" id="exampleInputEmail1" required="required" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga</label>
                            <input name="harga_paket" value="{{ $p->harga_paket }}" type="number" class="form-control" id="exampleInputEmail1" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Durasi</label>
                            <input name="durasi" value="{{ $p->durasi}}" type="number" class="form-control" id="exampleInputEmail1" required="required">
                        </div>
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                        <a href="{{route('dashboard')}}"style="text-decoration:none;">
                            <button type="button" class="btn btn-secondary">
                                Batal
                            </button>
                        </a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
