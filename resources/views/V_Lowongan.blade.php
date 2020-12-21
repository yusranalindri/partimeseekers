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
                    @if (Auth::user()->role==2)
                         @if ($a->greaterThan(Carbon\Carbon::now()))
                            Paket anda aktif hingga {{$a}} <br>
                            <a href="{{route('tambah-lowongan')}}" class="btn btn-primary">Tambah</a>
                        @else
                            Anda tidak memiliki paket aktif
                        @endif
                    @endif
                    

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
                                @if(Auth::user()->role==1)
                                    <th class="border-top-0">Mitra</th>
                                @endif
                                <th class="border-top-0">Lowongan</th>
                                <th class="border-top-0">Jabatan</th>
                                <th class="border-top-0">Status</th>
                                <th class="border-top-0">Diperbarui</th>
                                @if ($a->greaterThan(Carbon\Carbon::now()))
                                <th class="border-top-0">Aksi</th>
                                @endif
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lowongans as $l)
                                <tr>
                                    <td>{{$l->id}}</td>
                                    @if(Auth::user()->role==1)
                                        <td class="txt-oflo"><a href="{{route('mitra-detail',$l->mitra->user_id)}}">{{$l->mitra->user->name}}</a></td>
                                    @endif
                                    <td class="txt-oflo">{{$l->nama_lowongan}}</td>
                                    <td>{{$l->jabatan}}</td>
                                    {{--                                {{dd($l->statusLowongan)}}--}}
                                    <td>{{($l->statusLowongan->status)}}</td>
                                    <td class="txt-oflo">{{$l->updated_at->format('d-m-Y')}}</td>
                                    @if ($a->greaterThan(Carbon\Carbon::now()))
                                    <td class="txt-oflo">
                                        @if(Auth::user()->role==1)
                                            <a href="{{route('show-lowongan',$l->id)}}"
                                               class="btn btn-primary">Verify</a>
                                        @elseif(Auth::user()->role==2)
                                            @if($l->status!=1)
                                                @if($l->status==2)
                                                    <a href="{{route('edit-lowongan',$l->id)}}"
                                                       class="btn btn-danger">Hapus</a>
                                                @endif
                                                <a href="{{route('edit-lowongan',$l->id)}}"
                                                   class="btn btn-primary">Ubah</a>
                                            @else
                                                Sudah diverifikasi
                                            @endif

                                        @endif
                                        {{--                                    <a href="" class="btn btn-danger">Hapus</a>--}}
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
