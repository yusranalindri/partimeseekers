<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/daftarpaket.css">
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Part timeseekers</title>
  </head>
  <body>
    <h1 class="judul"><a href="{{route('dashboard')}}" style="text-docoration: none;">PART TIME SEEKERS</a></h1>
    <h2 class="subjudul">Tambah Paket</h2>
    <form action="/paketlowongan/store" method="post">
      @csrf
      <div class="form-group">
        <label for="exampleInputEmail1">Nama paket</label>
        <input name="name_paket" type="text" class="form-control" id="exampleInputEmail1" required="required" >
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Harga</label>
        <input name="harga_paket" type="number" class="form-control" id="exampleInputEmail1" required="required">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Durasi</label>
        <input name="durasi" type="number" class="form-control" id="exampleInputEmail1" required="required">
      </div>
      <input type="submit" value="Simpan Data" class="btn btn-primary">
      <a href="{{route('dashboard')}}"style="text-decoration:none;">
        <button type="button" class="btn btn-secondary">
          Batal
        </button>
      </a>
    </form>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
