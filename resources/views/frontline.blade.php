@extends('layouts.masterdashboard')

@section('title', 'FrontLine')


@section('content')
    @include('layouts/navbar')

    @include('layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <div class="row mt-2 mb-2">

                <section class="col-md-12 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h1>FrontLine</h1>
                        </div>
                    </div>
                </section>
                @if (Session::has('status'))
                    <div class="alert alert-{{ Session::get('button') }} alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('massage') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </strong>
                    </div>
                @endif
                <section class=" connectedSortable d-inline-flex p-2">
                    <div href="/inputpengiriman" class="card ml-3 p-3 col-md-4  bg-primary  rounded text-center "
                        id="card">
                        <i class='fas fa-clipboard-list ' style='font-size:8rem'></i>
                        <!-- Button trigger modal -->
                        <div class="card-body">
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#Modalinputpengiriman">
                                Input Data Paket
                            </button>
                        </div>

                    </div>
                    <div class="card ml-3 p-3 col-md-4 bg-warning rounded text-center">
                        <i class='fas fa-chart-pie' style='font-size:8rem'></i>
                        <div class="card-body">
                            <a href="/laporanfrontline" class="btn btn-success">Laporan</a>
                        </div>
                    </div>
                    <div class="card ml-3 p-3 col-md-4 bg-danger rounded text-center">
                        <i class='fas fa-cog fa-spin' style='font-size:8rem'></i>
                        <div class="card-body">
                            <a href="/settingsfrontline" class="btn btn-success">Settings</a>
                        </div>
                    </div>
                </section>
            </div>
            @include('forminputPengiriman')
            @if ($datainputpaket->isNotEmpty())
                <div class="row mt-2 mb-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nomor Resi</th>
                                <th scope="col">Pengirim</th>
                                <th scope="col">Status Kiriman</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datainputpaket as $datainfopaket => $datainput)
                                <tr>
                                    <th scope="row">
                                        {{ $datainfopaket + $datainputpaket->firstItem() }}
                                    </th>
                                    <td>{{ $datainput->nomor_resi }}</td>
                                    <td>{{ $datainput->namapengirim }}</td>
                                    <td>{{ $datainput->statusPaket->statuskiriman }}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#ModalEditPesanan{{ $datainput->id }}">
                                            Edit
                                        </button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#modalHapusPaketKiriman{{ $datainput->id }}">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                @include('editInputPengiriman')
                                @include('confirmdeletepaketkiriman')
                            @endforeach

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col">
                            <div class="px-3 py-3">
                                {{ $datainputpaket->links() }}
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </div>
    </div>

@endsection
