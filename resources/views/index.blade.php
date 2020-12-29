<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Partime Seekers</title>
  </head>
  <body>

    <video autoplay muted loop id="myVideo">
      <source src="/video/office.mp4" type="video/mp4">
    </video>

    <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Jenis User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <div class="modal-body">
        Pilihlah jenis user anda sesuai dengan kebutuhan
            </div>
            <div class="modal-footer">
              <a href="{{route('daftar-mitra')}}" class="btn btn-primary">Mitra</a>
              <a href="{{route('daftar-pelamar')}}" class="btn btn-primary">pelamar</a>
            </div>
          </div>
        </div>
      </div>

    <div class="flex-center position-ref full-height">
      <table>
        <tr>
          <td>
          <div class="content">
            <div class="title m-b-md">
             <img src="{{url('/images/vertical_putih_border-nvy.png')}}" alt="Image" style="max-height: 250px"/>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <td class="tabel">
          <div>
              <a href="{{route('login')}}" style="color:white;text-decoration:none;">
                <button type="button"class="btn btn-primary" >
                  Login
                </button>
              </a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:16px;">
              Daftar
            </button>
          </div>
          </td>
        </tr>
        </table>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>
      // Get the video
      var video = document.getElementById("myVideo");
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
