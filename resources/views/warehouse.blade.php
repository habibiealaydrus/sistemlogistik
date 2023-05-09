@extends('layouts.masterdashboard')

@section('title', 'Warehouse')


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
                            <h1>Gudang</h1>
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
