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
{{--                        <a href="{{route('profile.edit')}}">--}}
{{--                            <button type="button" class="btn btn-success btn-sm">Update Profile</button>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
		<div class="col-md-9">
            <div class="profile-content">
                <div class="card-body">
                    <form method="POST" action="{{route('profile.update')}}">
                        @method('patch')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nama perusahaan') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $user->name) }}" autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
						</div>

						<div class="form-group row">
                            <label for="alamat" class="col-md-4 col-form-label text-md-right">{{ __('alamat') }}</label>

                            <div class="col-md-6">
                                <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('Alamat', $user->alamat) }}" autocomplete="alamat" autofocus>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @if(Auth::user()->role==2)
						<div class="form-group row">
                            <label for="bidang" class="col-md-4 col-form-label text-md-right">{{ __('Bidang') }}</label>

                            <div class="col-md-6">
                                <input id="bidang" type="text" class="form-control @error('bidang') is-invalid @enderror" name="bidang" value="{{ old('bidang', $user->mitra->bidang) }}" autocomplete="bidang" autofocus>

                                @error('bidang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif
                        @if(Auth::user()->role==3)
						<div class="form-group row">
                            <label for="pekerjaan" class="col-md-4 col-form-label text-md-right">{{ __('pekerjaan') }}</label>

                            <div class="col-md-6">
                                <input id="pekerjaan" type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan', $user->pelamars->first()->pekerjaan) }}" autocomplete="pekerjaan">

                                @error('pekerjaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        @endif
                        
						<div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('No.Telephone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone', $user->phone) }}" autocomplete="phone" autofocus>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username', $user->username) }}" autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $user->email) }}" autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Update Profile
                                </button>
                            <a href="{{route('view-profile')}}"style="text-decoration:none;">
                                    <button type="button" class="btn btn-secondary">
                                      Batal
                                    </button>
                                  </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
