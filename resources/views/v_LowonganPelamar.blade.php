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
                {{-- <div class="white-box"> --}}
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
                    {{-- <div class="table-responsive"> --}}
                        {{-- <table class="table no-wrap">
                            <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Mitra</th>
                                <th class="border-top-0">Lowongan</th>
                                <th class="border-top-0">Jabatan</th>
                                <th class="border-top-0">Upah</th>
                            </tr>
                            </thead>
                            <tbody> --}}
                                <div class="row">
                                    @foreach ($lowongans as $l)
                                        <div class="col-md-4">
                                            <div class="card box p-2">
                                                <div class="card-body">
                                                    
                                                        <h5 class="card-title">Mitra :
                                                            <a href="{{route('mitra-detail',$l->mitra->user_id)}}">{{$l->mitra->user->name}}</a>
                                                        </h5>
                                                    
                                                    <p class="card-text">Pekerjaan : <a href="{{route('lowongan-detail',$l->id)}}">{{$l->nama_lowongan}}
                                                        </a>
                                                    </p>
                                                    <p class="card-text">Jabatan : {{$l->jabatan}}</p>
                                                    <p class="card-text">Gaji : Rp {{($l->upah)}}</p>
                                                    <a href="{{route('lowongan-detail',$l->id)}}" class="btn btn-primary">detail</a>
                                                </div>
                                            </div>
                                        </div>
                    
                                    @endforeach
                                </div>
                            {{-- @foreach($lowongans as $l)
                            <tr>
                                <td>{{$l->id}}</td>
                                <td class="txt-oflo"><a href="{{route('mitra-detail',$l->mitra->user_id)}}">{{$l->mitra->user->name}}</a></td>
                                <td class="txt-oflo"><a href="{{route('lowongan-detail',$l->id)}}">{{$l->nama_lowongan}}</td>
                                <td>{{$l->jabatan}}</td>
{{--                                {{dd($l->statusLowongan)}}--}}
                                {{-- <td>{{($l->upah)}}</td> --}}
                            {{-- </tr> --}}
                            {{-- @endforeach --}}

                            {{-- </tbody> --}}
                        {{-- </table> --}}
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
