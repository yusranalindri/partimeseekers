<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/detailtransaksi.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
        <h1 class="judul"><a href="{{route('dashboard')}}" style="text-docoration: none;">PART TIME SEEKERS</a></h1>
        <h2 class="subjudul">Upload Bukti Transfer</h2>
            
        <div class="form-group row">
            <label for="bukti" class="col-md-4 col-form-label">{{ __('Uplaod Bukti Transfer') }}</label>

            <div class="col">
                <input id="bukti" type="file" class="form-control @error('bukti') is-invalid @enderror" name="bukti" value="{{ old('bukti') }}">

                @error('bukti')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    <a href="{{route('pembelianmitra')}}"><button type="button" class="btn btn-success">Selesai</button></a>
        
        </div>
    </div>