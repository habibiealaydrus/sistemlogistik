@extends('layouts.masterdashboard')

@section('title', 'FrontLine')


@section('content')
    @include('layouts/navbar')

    @include('layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <div class="row mt-2 mb-2">

                <section class="col-lg-12 connectedSortable">
                    <div class="card">
                        <div class="card-header">
                            <h1>FrontLine</h1>
                        </div>
                    </div>
                </section>
                <section class="col-lg-12 connectedSortable d-flex">
                    <div href="/inputpengiriman" class="card m-3 bg-primary dropdown-menu-lg rounded text-center"
                        id="card" style="width: 18rem;">
                        <i class='fas fa-clipboard-list p-3' style='font-size:12rem'></i>
                        <div class="card-body">
                            <a href="/inputpengiriman" class="btn btn-success">Input Data Paket</a>
                        </div>
                    </div>
                    <div class="card m-3  bg-warning rounded text-center" style="width: 18rem;">
                        <i class='fas fa-chart-pie p-3' style='font-size:12rem'></i>
                        <div class="card-body">
                            <a href="/laporanfrontline" class="btn btn-success">Laporan</a>
                        </div>
                    </div>
                    <div class="card m-3  bg-danger rounded text-center" style="width: 18rem;">
                        <i class='fas fa-cog fa-spin p-3' style='font-size:12rem'></i>
                        <div class="card-body">
                            <a href="/settingsfrontline" class="btn btn-success">Settings</a>
                        </div>
                    </div>
                </section>
            </div>
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
                                        <button class="btn btn-warning">Edit</button>
                                        <button class="btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
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
