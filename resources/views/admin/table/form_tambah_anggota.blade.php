@extends('layout.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Imput data anggota</h1>
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
                                <h3 class="card-title">CRUD data anggota</h3>
                            </div>

                            <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control" id="nama"
                                            value="{{ old('nama') }}" name="nama" placeholder="masukan nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password" value="{{ old('password') }}" name="password">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="perempuan"
                                                    name="jenis_kelamin">
                                                <label class="form-check-label">perempuan</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" value="laki-laki"
                                                    name="jenis_kelamin" checked="">
                                                <label class="form-check-label">laki-laki</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="notelp">no telp</label>
                                        <input type="text" class="form-control" id="notelp" placeholder="no telp"
                                            value="{{ old('no_telp') }}" name="no_telp">
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">alamat</label>
                                        <input type="text" class="form-control" id="alamat" placeholder="alamat"
                                            value="{{ old('alamat') }}" name="alamat">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">emaila</label>
                                        <input type="email" class="form-control" id="email" placeholder="email"
                                            value="{{ old('email') }}" name="email">
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
