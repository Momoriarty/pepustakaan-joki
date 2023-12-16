@extends('layout.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Buku</h3>
                            </div>
                            <div class="col-md-3 ml-3">
                                <a href="{{ route('buku.create') }}" class="btn btn-success">+ Tambah</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 15px">No</th>
                                            <th>Kode buku</th>
                                            <th>Judul buku</th>
                                            <th>Penerbit buku</th>
                                            <th>Tahun terbit</th>
                                            <th>Pengarang</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $dt)
                                            <tr>

                                                <td>{{ $dt->id_buku }}</td>
                                                <td>{{ $dt->kode_buku }}</td>
                                                <td>{{ $dt->judul_buku }}</td>
                                                <td>{{ $dt->penerbit_buku }}</td>
                                                <td>{{ $dt->tahun_terbit }}</td>
                                                <td>{{ $dt->pengarang }}</td>
                                                <td>{{ $dt->kategori }}</td>
                                                <td>{{ $dt->stok }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-right">
                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
    </div>
    <!-- /.card -->
@endsection
