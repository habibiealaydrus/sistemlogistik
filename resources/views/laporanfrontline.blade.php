@extends('layouts.masterdashboard')

@section('title', 'Laporan FrontLine')


@section('content')
    @include('layouts/navbar')

    @include('layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
    {{-- {{ dd($jeniskiriman) }} --}}
    <div class="content-wrapper">
        <section class="col-md-12 connectedSortable">
            <div class="card">
                <div class="card-header">
                    <h1><strong> Laporan </strong>FrontLine</h1>
                    <h5><a href="/frontline">Kembali</a></h5>

                </div>

            </div>
        </section>

        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Jenis pengiriman</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="pie_chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">

                </div>
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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        var analytics = <?php echo $jeniskiriman; ?>

        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(analytics);
            var options = {
                title: 'Jenis Pengiriman'
            };
            var chart = new google.visualization.PieChart(document.getElementById('pie_chart'));
            chart.draw(data, options);
        }
    </script>

@endsection
