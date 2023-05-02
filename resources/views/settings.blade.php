@extends('layouts.masterdashboard')

@section('title', 'Settings')

@section('content')
    @include('layouts/navbar')

    @include('layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <div class="row mt-2 mb-2 d-flex justify-content-left">
                <section class="col-lg-6 connectedSortable">
                    <div class="card mt-2" style="width: 36rem;">
                        <div class="card-header d-flex justify-content-between">
                            <div>
                                <h5>Jenis Layanan Pengiriman</h1>
                            </div>
                            <div>
                                <button class="btn btn-primary mt-1" data-toggle="modal"
                                    data-target="#modalTambahHargaPengiriman">
                                    Tambah
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Pengiriman</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $datajenis => $datajeniskirim)
                                        <tr>
                                            <th scope="row">{{ $datajenis + $data->firstItem() }}</th>
                                            <td>{{ $datajeniskirim->name }}</td>
                                            <td>{{ $datajeniskirim->harga }}</td>
                                            <td>
                                                <button class="btn btn-warning">Edit</button>
                                                <button class="btn btn-danger mt-1" data-toggle="modal"
                                                    data-target="#modalHapusJenisKirim">
                                                    hapus
                                                </button>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </section>
                @if (Session::has('status'))
                    <section class="col-lg-5 connectedSortable ">
                        <div class="alert alert-{{ Session::get('button') }} alert-dismissible fade show ml-5 mt-3"
                            role="alert">
                            <strong>{{ Session::get('massage') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    </section>
                @endif
            </div>
            <div class="row">
                <div class="col">
                    <div class="px-3 py-3">
                        {{ $data->withQueryString()->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('tambahhargapengiriman')
    @include('editharga')
    @if ($data->isNotEmpty())
        @include('confirmdeletejeniskirim')
    @endif

@endsection
