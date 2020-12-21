@extends('layouts.master-admin')
@section('contents')
<div class="container-fluid">
    <div class="col-md-12 col-lg-12 col-sm-12">
    @if (Auth::user()->role==3)
        <div class="white-box">
          <div class="profile-content">
              <div class="form-group row">
                <label for="nama_lowongan" class="col-md-4 col-form-label text-md-right">{{ __('Nama lowongan') }}</label>
                <div class="col-md-6">
                    <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$applylowongan->lowongan->nama_lowongan}}">
              </div>
            </div>

              <div class="form-group row">
                <label for="jabatan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Jabatan') }}</label>
                <div class="col-md-6">
                    <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$applylowongan->lowongan->jabatan}}">
              </div>
            </div>
              <div class="form-group row">
                <label for="upah" class="col-md-4 col-form-label text-md-right">{{ __('Upah') }}</label>
                <div class="col-md-6">
                    <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$applylowongan->lowongan->upah}}">
              </div>
              </div>

              <div class="form-group row">
                <label for="kriteria" class="col-md-4 col-form-label text-md-right">{{ __('kriteria') }}</label>
                <div class="col-md-6">
                    <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$applylowongan->lowongan->kriteria}}">
              </div>
            </div>

            <div class="form-group row">
              <label for="kriteria" class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label>
              <div class="col-md-6">
                  <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$applylowongan->statusPembelian->status}}">
            </div>
          </div>

          <div class="form-group row">
              <label for="kriteria" class="col-md-4 col-form-label text-md-right">{{ __('berkas') }}</label>
              <div class="col-md-6">
                <img src="{{asset('uploads/'.$applylowongan->berkas)}}" alt="" style="max-height: 400px">
            </div>
          </div>
          

            </div>
            <a href="{{route('lamaran')}}">
            <div class="row col-12">
                <button class="btn btn-secondary float-right"> kembali</button>
            </div>
          </a>
          @endif
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
