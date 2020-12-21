@extends('layouts.master-admin')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Tambah Lowongan</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- RECENT SALES -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <form action="{{route('store-lowongan')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Nama Lowongan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama_lowongan') is-invalid @enderror"
                                       id="nama_lowongan"
                                       name="nama_lowongan" value="{{ old('nama_lowongan') }}">
                                @error('nama_lowongan')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'jangan ada data kosong!!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Nama Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                       id="jabatan"
                                       name="jabatan" value="{{ old('jabatan') }}">
                                @error('jabatan')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'jangan ada data kosong!!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Upah</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('upah') is-invalid @enderror" id="upah"
                                       name="upah" value="{{ old('upah') }}">
                                @error('upah')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'jangan ada data kosong!!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Kriteria</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('kriteria') is-invalid @enderror" id="kriteria"
                                          name="kriteria">
                                    {{ old('kriteria') }}
                                </textarea>
                                @error('kriteria')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'jangan ada data kosong!!'}} </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row col-12">
                            <button class="btn btn-primary float-right"> Submit</button>
                        </div>
                        
                    </form>
                    <a href="{{route('lowongan')}}">
                        <div class="row col-12">
                            <button class="btn btn-primary float-right"> batal</button>
                        </div>
                        </a>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent Comments -->
        <!-- ============================================================== -->


    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
@endsection
