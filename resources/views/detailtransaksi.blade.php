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
        <h2 class="subjudul">Verifikasi Transaksi</h2>
        @foreach ($pembelian_pakets as $item)
        <input type="hidden" name="id" value="{{ $item->id }}"/>
        <form method="post "action="/paketlowongan/pembelian_paket/verifikasi">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}"/>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Verifikasi</label>
                        <input name="verifikasi" value="{{ $item->status_pembelian }}" type="text" class="form-control" id="exampleInputEmail1" required="required">
                    </div>
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
            </form> 
        @endforeach       
        </div>
    </div>