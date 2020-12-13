@extends('layouts.master-admin')
@section('contents')
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title text-uppercase font-medium font-14">Mitra </h4>
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
{{--                    <a href="{{route('tambah-lowongan')}}" class="btn btn-primary">Tambah</a>--}}
                    {{--                    <div class="d-md-flex mb-3">--}}
                    {{--                        <h3 class="box-title mb-0">List Lowongan</h3>--}}
                    {{--                        <div class="col-md-3 col-sm-4 col-xs-6 ml-auto">--}}
                    {{--                            <select class="form-control row border-top">--}}
                    {{--                                <option>March 2017</option>--}}
                    {{--                                <option>April 2017</option>--}}
                    {{--                                <option>May 2017</option>--}}
                    {{--                                <option>June 2017</option>--}}
                    {{--                                <option>July 2017</option>--}}
                    {{--                            </select>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                    <div class="table-responsive">
                        <table class="table no-wrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Nama Mitra</th>
                                <th class="border-top-0">Bidang</th>
                                <th class="border-top-0">No Phome</th>
                                <th class="border-top-0">Email</th>
                                <th class="border-top-0">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($mitras as $m)
                                <tr>
                                    <td>{{$m->id}}</td>
                                    <td class="txt-oflo">{{$m->username}}</td>
                                    <td>{{$m->mitra->bidang}}</td>
                                    {{--                                {{dd($m->statusLowongan)}}--}}
                                    <td>{{$m->phone}}</td>
                                    <td class="txt-oflo">{{$m->email}}</td>
                                    <td class="txt-oflo">
                                        <a href="{{route('mitra-detail',$m->id)}}" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent Comments -->
        <!-- ============================================================== -->


    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
@endsection
