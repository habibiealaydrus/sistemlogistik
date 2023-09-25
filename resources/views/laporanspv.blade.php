@extends('layouts.masterdashboard')

@section('title', 'Laporan SPV')

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
                            <h1>Laporan Supservisor</h1>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@endsection
