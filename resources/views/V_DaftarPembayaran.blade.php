@extends('layouts.master-admin')
@section('contents')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-sm-12">
                <div class="white-box">

                            <a href="{{route('dashboard')}}"><h3>Part Time Seekers</h3></a>
                            <h5 class="header-title pb-3 mt-0">Payments</h5>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead>
                                    <tr class="align-self-center">
                                        <th>Nama Paket</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nomor Telephone</th>
                                        <th>Biaya</th>
                                        <th scope="col">Status File</th>
                                        <th>Status</th>
<th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($pembelianp as $t)
                                        <tr>
                                            <td>{{$t->paket->name_paket}}</td>
                                            <td>{{$t->mitra->user->name}}</td>
                                            <td>{{$t->mitra->user->phone}}</td>
                                            <td>{{$t->paket->harga_paket}}</td>
                                            <td>{{($t->bukti_transfer)?'Sudah Upload':'Belum Upload'}}</td>
                                            <td>{{$t->stasusPembelian->status}}</td>
                                            <td><a href="/paketlowongan/pembelian_paket/detail/{{ $t->id }}">
                                                    <svg width="1em" height="1em" viewBox="0 0 16 16"
                                                         class="bi bi-arrows-fullscreen" fill="currentColor"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                              d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
                                                    </svg>
                                                </a><span
                                                    class="badge badge-boxed badge-soft-warning">{{$t->status_pembelian}}</span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!--end table-responsive-->
                            <div class="pt-3 border-top text-right"><a href="#" class="text-primary">View all <i
                                        class="mdi mdi-arrow-right"></i></a></div>
                        </div>

            </div>
        </div>
    </div>
@endsection
