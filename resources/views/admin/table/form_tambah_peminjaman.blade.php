@extends('layout.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>tabel peminjaman</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/peminjaman">Kemblai</a></li>
                            <li class="breadcrumb-item active">tebel peminjaman</li>
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
                                <h3 class="card-title">peminjaman</h3>
                            </div>

                            <form action="{{ route('peminjaman.store') }}" method="POST" enctype="multipart/form-data">
@csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="tgl_peminjam">tanggal peminjaman</label>
                                        <input type="date" class="form-control" id="tgl_pinjam"
                                            value="{{ old('tgl_peminjam') }}" name="tgl_peminjam"
                                            placeholder="tanggal peminjam">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_pengembalin">tanggal pengembalian</label>
                                        <input type="date" class="form-control" id="tgl_pengembalian" name="tgl_pengembalian"
                                            placeholder="tgl pengembalian">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_buku">id buku</label>
                                        <input type="text" class="form-control" id="id_buku" placeholder="id buku" name="id_buku">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_anggota">id anggota</label>
                                        <input type="text" class="form-control" id="id_anggota" placeholder="id anggota" name="id_anggota">
                                    </div>
                                    <div class="form-group">
                                        <label for="id_petugas">id petugas</label>
                                        <input type="text" class="form-control" id="id_petugas" placeholder="id petugas" name="id_petugas">
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
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
