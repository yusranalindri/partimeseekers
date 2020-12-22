@extends('layouts.master-admin')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Detail Lowongan</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        @if (Auth::user()->role==1)
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <form action="{{route('verify-lowongan',$lowongan->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Nama Lowongan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('nama_lowongan') is-invalid @enderror"
                                       id="nama_lowongan" name="nama_lowongan" value="{{ $lowongan->nama_lowongan }}"
                                       disabled>
                                @error('nama_lowongan')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Nama lowongan harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Nama Jabatan</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('jabatan') is-invalid @enderror"
                                       id="jabatan"
                                       name="jabatan" value="{{ $lowongan->jabatan }}" disabled>
                                @error('jabatan')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Nama jabatan harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Upah</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control @error('upah') is-invalid @enderror" id="upah"
                                       name="upah" value="{{ $lowongan->upah }}" disabled>
                                @error('upah')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Nama upah harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Kriteria</label>
                            <div class="col-sm-10">
                                <textarea class="form-control @error('kriteria') is-invalid @enderror" id="kriteria"
                                          style="height: 150px"
                                          name="kriteria" disabled>
                                    {{ $lowongan->kriteria }}
                                </textarea>
                                @error('kriteria')
                                <div id="validationServer03Feedback"
                                     class="invalid-feedback"> {{'Kriteria upah harap diisi!'}} </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="judul" class="col-sm-2 col-form-label">Status</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="status" id="">
                                    <option value="0" {{($lowongan->status==0)?'selected':''}}>Menunggu</option>
                                    <option value="1" {{($lowongan->status==1)?'selected':''}}>Diterima</option>
                                    <option value="2" {{($lowongan->status==2)?'selected':''}}>Ditolak</option>
                                </select>
                            </div>
                        </div>


                        <div class="row col-12">
                            <button class="btn btn-primary float-right"> Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        @endif

        @if (Auth::user()->role==3)
        <div class="white-box">
          <div class="profile-content">
              <div class="form-group row">
                <label for="nama_lowongan" class="col-md-4 col-form-label text-md-right">{{ __('Nama lowongan') }}</label>
                <div class="col-md-6">
                    <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$lowongan->nama_lowongan}}">
              </div>
            </div>

              <div class="form-group row">
                <label for="jabatan" class="col-md-4 col-form-label text-md-right">{{ __('Nama Jabatan') }}</label>
                <div class="col-md-6">
                    <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$lowongan->jabatan}}">
              </div>
            </div>
              <div class="form-group row">
                <label for="upah" class="col-md-4 col-form-label text-md-right">{{ __('Upah') }}</label>
                <div class="col-md-6">
                    <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$lowongan->upah}}">
              </div>
              </div>

              <div class="form-group row">
                <label for="kriteria" class="col-md-4 col-form-label text-md-right">{{ __('kriteria') }}</label>
                <div class="col-md-6">
                    <input id="berkas" type="text" class="form-control @error('berkas') is-invalid @enderror" name="berkas" value="{{$lowongan->kriteria}}">
              </div>
            </div>
            </div>
            <a href="{{route('berkaslamaran',$lowongan->id)}}" class="btn btn-primary">apply lowongan</a>
        <a href="{{route('lowongan-pelamar')}}">
            <div class="row col-12">
                <button class="btn btn-secondary float-right"> kembali</button>
            </div>
          </a>
          @endif
    </div>
@endsection
