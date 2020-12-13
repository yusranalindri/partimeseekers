@extends('layouts.master-admin')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Pilihan Paket </h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="container">

<div class="mt-3 mb-3">
    @if(Auth::user()->role==1)
            <a class="btn btn-info" href='{{route('tambahpaket')}}'>
                Tambah Baru
            </a>
            <a href='{{route('pembelianpaket')}}' class="btn btn-info">
                Transaksi
            </a>
    @endif
</div>
            <div class="row">
                @foreach ($pakets as $p)
                    <div class="col-md-4">
                        <div class="card box p-2">
                            <div class="card-body">
                                <h5 class="card-title">{{$p->name_paket}}</h5>
                                <p class="card-text">Rp {{$p->harga_paket}}</p>
                                <p class="card-text">{{$p->durasi}} Hari
                                </p>
                                @if(Auth::user()->role==1)
                                <a href="/paketlowongan/edit/{{ $p->id }}" class="btn btn-primary">Edit</a>
                                <a href="/paketlowongan/hapus/{{ $p->id }}" class="btn delete btn-danger">Delete</a>
                                @elseif(Auth::user()->role==2)
                                    <a href="{{route('belipaket',$p->id)}}" class="btn btn-success" style="color: white">Beli Paket</a>
                                @endif
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
    </div>
@endsection
