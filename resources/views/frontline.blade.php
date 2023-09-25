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
                        <!-- Button trigger modal -->
                        <div>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#Modalinputpengiriman">
                                Input Data Paket
                            </button>
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
                                        <button class="btn btn-warning">Edit</button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#ModalEditPesanan{{ $datainput->id }}">
                                            Edit
                                        </button>
                                        <button class="btn btn-danger">Hapus</button>
                                    </td>
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="ModalEditPesanan{{ $datainput->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Edit Data Pengiriman</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="/createpengiriman" method="post">
                                                    @csrf
                                                    <div class="form-group">
                                                        <label>Nomor Resi Pengiriman</label>
                                                        <input type="text" class="form-control" autofocus
                                                            name="nomor_resi" id="nomor" readonly
                                                            value="{{ $datainput->nomor_resi }}">
                                                        <small id="pengirimHelp" class="form-text text-muted">
                                                            No. Resi Pengiriman
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Pengirim</label>
                                                        <input type="text" class="form-control" autofocus
                                                            name="namapengirim" id="namapengirim"
                                                            value="{{ $datainput->namapengirim }}"
                                                            placeholder="Nama Pengirim">
                                                        <small id="pengirimHelp" class="form-text text-muted">
                                                            Masukan Sesuai KTP
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Pengirim</label>
                                                        <input type="text" class="form-control" name="alamatpengirim"
                                                            id="alamatpengirim" placeholder="Alamat Pengirim"
                                                            value="{{ $datainput->alamatpengirim }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak Pengirim</label>
                                                        <input type="tel" class="form-control" name="kontakpengirim"
                                                            id="kontakpengirim" placeholder="0812-34567-890"
                                                            value="{{ $datainput->alamatpengirim }}"
                                                            pattern="[0-9]{4}-[0-9]{5}-[0-9]{3}" required>
                                                        <small id="penerimaHelp" class="form-text text-muted">
                                                            Format=0812-34567-890
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Nama Penerima</label>
                                                        <input type="text" class="form-control" name="namapenerima"
                                                            id="namapenerima" placeholder="Nama penerima"
                                                            value="{{ $datainput->namapenerima }}">
                                                        <small id="penerimaHelp" class="form-text text-muted">
                                                            Masukan Sesuai KTP
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alamat Penerima</label>
                                                        <input type="text" class="form-control" name="alamatpenerima"
                                                            value="{{ $datainput->alamatpenerima }}" id="alamatpenerima"
                                                            placeholder="Alamat Penerima">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Kontak Penerima</label>
                                                        <input type="tel" class="form-control" name="kontakpenerima"
                                                            value="{{ $datainput->alamatpenerima }}" id="kontakpenerima"
                                                            placeholder="0812-34567-890"
                                                            pattern="[0-9]{4}-[0-9]{5}-[0-9]{3}">
                                                        <small id="penerimaHelp" class="form-text text-muted">
                                                            Format=0812-34567-890
                                                        </small>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Berat Barang</label>
                                                        <input type="number" class="form-control" name="beratbarang"
                                                            value="{{ $datainput->beratbarang }}" id="alamat"
                                                            placeholder="Berat Paket">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Lebar Barang</label>
                                                        <input type="number" class="form-control" name="lebarbarang"
                                                            value="{{ $datainput->lebarbarang }}" id="lebar"
                                                            placeholder="Lebar barang">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Panjang Barang</label>
                                                        <input type="number" class="form-control" name="panjangbarang"
                                                            value="{{ $datainput->panjangbarang }}" id="panjang"
                                                            placeholder="Panjang barang">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                            <label class="input-group-text" for="inputGroupSelect01">Jenis
                                                                Kiriman</label>
                                                        </div>
                                                        <select class="custom-select" id="hargaJenisKirim"
                                                            name="jeniskiriman" oninput="hitungBiaya()">
                                                            <option value="{{ $datainput->jeniskiriman }}">
                                                                value="{{ $datainput->jeniskiriman }}"</option>
                                                            @foreach ($optionkirim as $jeniskirim)
                                                                <option value="{{ $jeniskirim->harga }}">
                                                                    {{ $jeniskirim->name }} </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Biaya Pengiriman</label>
                                                        <input type="number" class="form-control" id="jarak"
                                                            placeholder="masukan jarak (dalam km)"
                                                            oninput="hitungBiaya()">
                                                        <span class="d-flex justify-content-left mt-2">
                                                            Rp.<input type="text" class="form-control"
                                                                id="kalkulasiBiaya" name="biaya" readonly>
                                                        </span>
                                                    </div>
                                                    <div class="form-group d-none">
                                                        <label>Status Kiriman</label>
                                                        {{-- script biaya pengiriman --}}
                                                        <input type="number" class="form-control" id="jarak"
                                                            value="2" name="statuskiriman"
                                                            value="{{ $datainput->statuskiriman }}">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Buat
                                                        Pengiriman</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
