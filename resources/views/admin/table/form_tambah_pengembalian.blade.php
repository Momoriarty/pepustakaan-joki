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
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Simple Tables</li>
                        </ol>
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
                                <h3 class="card-title">CRUD Data pengembalian</h3>
                            </div>

                        </div>
                        <form action="{{ route('pengembalian.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="tgl_pengembalian">tanggal pengembalian</label>
                                <input type="date" class="form-control" id="tgl_pengembalian"
                                    value="{{ old('tgl_pengembalian') }}" name="tgl_pengembalian" placeholder=".....">
                            </div>
                            <div class="form-group">
                                <label for="denda">denda</label>
                                <input type="text" class="form-control" id="denda" value="{{ old('denda') }}"
                                    name="denda" placeholder=".....">
                            </div>
                            <div class="form-group">
                                <label for="id_buku">id buku</label>
                                <input type="text" class="form-control" id="id_buku" value="{{ old('id_buku') }}"
                                    name="id_buku" placeholder=".....">
                            </div>
                            <div class="form-group">
                                <label for="id_anggota">id anggota</label>
                                <input type="text" class="form-control" id="id_anggota" value="{{ old('id_anggota') }}"
                                    name="id_anggota" placeholder=".....">
                            </div>
                            <div class="form-group">
                                <label for="id_petugas">id petugas</label>
                                <input type="text" class="form-control" id="id_petugas" value="{{ old('id_petugas') }}"
                                    name="id_petugas" placeholder=".....">
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection
