<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/paketlowongan.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Part timeseekers</title>
  </head>
  <body>
    <div class="about-section">
    <a href="{{route('dashboard')}}" style="text"><h1>Part Time Seekers</h1></a>
  <p>pilihan paket terkait pemasangan iklan lowongan pekerjaan</p>
</div>
<div class="tambah">
<a href='{{route('pembelianmitra')}}'>
  <button type="button" class="btn btn-info">Transaksi</button>
</a>
</div>
<h2 style="text-align:center">Pilihan Paket</h2>

@foreach ($pakets as $p)
<div class="card box" style="width: 25%; display:flex; float:left;">
  <div class="card-body">
    <h5 class="card-title">{{$p->name_paket}}</h5>
    <p class="card-text">Rp {{$p->harga_paket}}</p>
    <p class="card-text">{{$p->durasi}} Hari</p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Pilih
    </button>
    
  </div>
</div>
@endforeach
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        menuju form pembayaran
      </div>
     <div class="modal-footer">
      <a href="{{route('pembayaran.pilih')}}"><button type="button" class="btn btn-primary">OK</button></a>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
