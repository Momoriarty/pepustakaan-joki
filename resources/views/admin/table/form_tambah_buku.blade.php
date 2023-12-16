@extends('layout.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Imput data buku</h1>
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
                                <h3 class="card-title">CRUD Data Buku</h3>
                            </div>

                            <form action="{{ route('buku.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_buku">Code buku</label>
                                        <input type="text" class="form-control" id="text"
                                            value="{{ old('kode_buku') }}" name="kode_buku" placeholder="masukan kode">
                                    </div>
                                    <div class="form-group">
                                        <label for="judul_buku">Judul Buku</label>
                                        <input type="text" class="form-control" id="judul_buku"
                                            placeholder="masukan judul" value="{{ old('judul_buku') }}" name="judul_buku">
                                    </Div>
                                    <div class="form-group">
                                        <label for="penerbit_buku">Penerbit Buku</label>
                                        <input type="text" class="form-control" id="penerbit_buku"
                                            placeholder="nama penerbit" value="{{ old('penerbit_buku') }}"
                                            name="penerbit_buku">
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_terbit">Tahun Terbit</label>
                                        <input type="date" class="form-control" id="tahun_terbit"
                                            placeholder="tahun penerbit" value="{{ old('tahun_terbit') }}"
                                            name="tahun_terbit">
                                    </div>
                                    <div class="form-group">
                                        <label for="pengarang">Pengarang</label>
                                        <input type="text" class="form-control" id="pengarang" placeholder="pengarang"
                                            value="{{ old('pengarang') }}" name="pengarang">
                                    </div>
                                    <h4>kategori</h4>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="cerita" name="kategori">
                                            <label class="form-check-label">cerita</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="novel" name="kategori"
                                                checked="">
                                            <label class="form-check-label">Novel</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="pelajaran" name="kategori"
                                                checked="">
                                            <label class="form-check-label">Pelajaran</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="komik" name="kategori"
                                                checked="">
                                            <label class="form-check-label">komik</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Gambar</label>
                                    <div class="input-group">
                                        <input type="file" name="gambar" class="form-control">
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
