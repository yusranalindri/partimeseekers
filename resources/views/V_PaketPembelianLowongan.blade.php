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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">


                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Status</th>
                                <th scope="col">Status File</th>
                                <th scope="col">Akhir Paket</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($pembelians->pembelianPakets as $p)
                                <tr>
                                    <th scope="row">{{$p->id}}</th>
                                    <td>{{$p->paket->name_paket}}</td>
                                    <td>{{$p->stasusPembelian->status}}</td>
                                    <td>{{($p->bukti_transfer)?'Sudah Upload':'Belum Upload'}}</td>
                                    <td>{{$p->status_pembelian_id ==1 ?$p->updated_at->addDays($p->paket->durasi):''}}</td>
                                    <td>
                                        @if($p->status_pembelian_id !=1)
                                            <a href="{{route('pembelian.edit',$p->id)}}" class="btn btn-success"
                                               style="color: white">Unggah</a>
                                        @else
                                            Terverifikasi
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
