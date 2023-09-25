@extends('layouts.masterdashboard')
@section('title', 'User list')
@section('content')
    @include('layouts/navbar')
    <!-- Main Sidebar Container -->
    @include('layouts/sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <div class="row mt-2 mb-2">
                <section class="col-lg-12 connectedSortable">
                    <div class="card">
                        @if (Session::has('status'))
                            <div class="alert alert-{{ Session::get('button') }} alert-dismissible fade show" role="alert">
                                <strong>{{ Session::get('massage') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                        @endif
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#tambahUserModal">
                                    Tambah User
                                </button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <div class="chart tab-pane active" id="users" style="position: relative;">
                                    <table class="table table-light text-center">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Level</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $datatable => $users)
                                                <tr>

                                                    <th scope="row">{{ $datatable + $data->firstItem() }}</td>
                                                    <td>{{ $users->name }}</td>
                                                    <td>{{ $users->LevelUser->name }}</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="Basic example">
                                                            <button class="btn btn-primary" data-toggle="modal"
                                                                data-target="#detail{{ $users->id }}">Detail</button>
                                                            <button class="btn btn-warning" data-toggle="modal"
                                                                data-target="#edit{{ $users->id }}">Edit</button>
                                                            <a href="/confirmdelete/{{ $users->id }}"
                                                                class="btn btn-danger">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @include('detail')
                                                @include('edit')
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col">
                                            <div class="px-3 py-3">
                                                {{ $data->links() }}
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </section>
            </div>
        </div>
    </div>
    @include('formcreate')
    <!-- Modal -->
@endsection
