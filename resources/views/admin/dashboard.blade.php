@extends('admin.components.layouts.base')

@section('title', 'Dashboard')

@section('content')
    {{-- card informasi users --}}
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Data Wisata</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totaldata }}</div>
                    </div>
                    {{-- <div class="col-auto">
                        <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- tabel users --}}
    <div class="tabel-user" style="width: 100%;">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Tabel</h6>
                <a href="{{route('admin.create')}}" target=""
                    style="font-weight: bold; text-decoration: underline;">Tambahkan</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Jenis Wisata</th>
                                <th>Title</th>
                                <th>Tag</th>
                                <th>Short Deskripsi</th>
                                <th>Long Deskripsi</th>
                                <th>Location</th>
                                <th>Harga</th>
                                <th>Ranting</th>
                                <th>Url Images</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($news as $new)
                                <tr>
                                    <td>{{ $new->jenis_wisata }}</td>
                                    <td>{{ $new->title }}</td>
                                    <td>{{ $new->tag }}</td>
                                    <td>{{ $new->short_deskripsi }}</td>
                                    <td>{{ $new->long_deskripsi }}</td>
                                    <td>{{ $new->location }}</td>
                                    <td>{{ $new->harga }}</td>
                                    <td>{{ $new->ranting }}</td>
                                    <td>{{ $new->url_images }}</td>

                                    <td style="display: flex; justify-items: center;">
                                        <a href="{{route('admin.edit', $new->id)}}"
                                            class="btn btn-primary">Edit</a>
                                        <form action="{{route('admin.delete', $new->id)}}"
                                            style="margin-left: 10px;" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
