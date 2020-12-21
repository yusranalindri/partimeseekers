@extends('layouts.master-admin')
@section('contents')
    {{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <link rel="stylesheet" href="{{asset('css/profil.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar container">
                    <!-- SIDEBAR USERPIC -->
                    <a href="{{route('dashboard')}}" style="text-decoration: none;"><h2 class="subjudul">Part time
                            seekers</h2></a>
                    <div class="profile-userpic">
                        <img src="{{asset('images/User.png')}}" class="cropped1 img-responsive" alt="image" style="max-height: 100px">
                    </div>
                    <div class="profile-userbuttons">
                        <a href="{{route('profile.edit')}}">
                            <button type="button" class="btn btn-success btn-sm">Update Profile</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <div class="form-group row">
                        <label for="namaperusahaan"
                               class="col-md-4 col-form-label text-md-right">{{ __('Nama perusahaan') }}
                        </label>
                        <label for="namaperusahaan"
                               class=" col-form-label text-md-right">{{ auth()->user()->name }}
                        </label>
                    </div>

                    <div class="form-group row">
                        <label for="alamat"
                               class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>
                        <label for="namaperusahaan"
                               class=" col-form-label text-md-right">{{ auth()->user()->alamat }}
                        </label>
                    </div>
                    @if(Auth::user()->role==2)
                    <div class="form-group row">
                        <label for="bidang"
                               class="col-md-4 col-form-label text-md-right">{{ __('Bidang') }}</label>
                        <label for="namaperusahaan"
                               class=" col-form-label text-md-right">{{ auth()->user()->mitra->bidang}}
                        </label>
                    </div>
                    @endif
                    @if(Auth::user()->role==1)
                    <div class="form-group row">
                        <label for="bidang"
                               class="col-md-4 col-form-label text-md-right">{{ __('Bidang') }}</label>
                        <label for="namaperusahaan"
                               class=" col-form-label text-md-right">{{ auth()->user()->mitra->bidang}}
                        </label>
                    </div>
                    @endif
                    @if(Auth::user()->role==3)
                    <div class="form-group row">
                        <label for="pekerjaan"
                               class="col-md-4 col-form-label text-md-right">{{ __('pekerjaan') }}</label>
                        <label for="pekerjaan"
                               class=" col-form-label text-md-right">{{ auth()->user()->pelamars->first()->pekerjaan}}
                        </label>
                    </div>
                    @endif
                    <div class="form-group row">
                        <label for="phone"
                               class="col-md-4 col-form-label text-md-right">{{ __('No.Handphone') }}</label>
                        <label for="namaperusahaan"
                               class=" col-form-label text-md-right">{{ auth()->user()->phone }}
                        </label>
                    </div>

                    <div class="form-group row">
                        <label for="email"
                               class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <label for="namaperusahaan"
                               class=" col-form-label text-md-right">{{ auth()->user()->email }}
                        </label>
                    </div>

                    <div class="form-group row">
                        <label for="username"
                               class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                        <label for="namaperusahaan"
                               class=" col-form-label text-md-right">{{ auth()->user()->username }}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
