@extends('layouts.master-admin')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Lowongan </h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">

                </div>
            </div>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- RECENT SALES -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Lowongan</th>
                                <th class="border-top-0">Jabatan</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Aksi</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applylowongans as $al)
                                <tr>
                                    <td>{{$al->id}}</td>
                                    <td class="txt-oflo">{{$al->lowongan->nama_lowongan}}</td>
                                    <td>{{$al->lowongan->jabatan}}</td>
                                    {{--                                {{dd($l->statusLowongan)}}--}}
                                    <td>{{($al->statusPembelian->status)}}</td>
                                    <td class="txt-oflo">
                                        @if(Auth::user()->role==3)
                                            <a href="{{route('lihatlamaran',$al->id)}}"class="btn btn-primary">Detail</a>
                                    </td>
                                        @endif
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
