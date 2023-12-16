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
                                            <th>Id Buku</th>
                                            <th>Kode buku</th>
                                            <th>Judul buku</th>
                                            <th>Penerbit buku</th>
                                            <th>Tahun terbit</th>
                                            <th>Pengarang</th>
                                            <th>Kategori</th>
                                            <th>Stok</th>
                                            <th>gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $dt)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $dt->id_buku }}</td>
                                                <td>{{ $dt->kode_buku }}</td>
                                                <td>{{ $dt->judul_buku }}</td>
                                                <td>{{ $dt->penerbit_buku }}</td>
                                                <td>{{ $dt->tahun_terbit }}</td>
                                                <td>{{ $dt->pengarang }}</td>
                                                <td>{{ $dt->kategori }}</td>
                                                <td>{{ $dt->stok }}</td>
                                                <td>
                                                    <img src="public/posts/{{ $dt->gambar }}" width="50"
                                                        {{-- alt="public/public/posts/{{ $dt->gambar }}" --}}>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning mb-1" data-toggle="modal"
                                                        data-target="#editModal{{ $dt->id_buku }}">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger mb-1" data-toggle="modal"
                                                        data-target="#deleteModal{{ $dt->id_buku }}">
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="editModal{{ $dt->id_buku }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Buku</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('buku.update', $dt->id_buku) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="modal-body">
                                                                <!-- Displayed fields in the table row -->
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">ID Buku</label>
                                                                    <input type="text" name="id_buku"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->id_buku }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editKodeBuku">Kode Buku</label>
                                                                    <input type="text" name="kode_buku"
                                                                        class="form-control" id="editKodeBuku"
                                                                        value="{{ $dt->kode_buku }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Judul Buku</label>
                                                                    <input type="text" name="judul_buku"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->judul_buku }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Penerbit Buku</label>
                                                                    <input type="text" name="penerbit_buku"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->penerbit_buku }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Tahun Terbit</label>
                                                                    <input type="text" name="tahun_terbit"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->tahun_terbit }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Pengarang</label>
                                                                    <input type="text" name="pengarang"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->pengarang }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">kategori</label>
                                                                    <input type="text" name="kategori"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->kategori }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Stok</label>
                                                                    <input type="text" name="stok"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->stok }}">
                                                                </div>

                                                                <!-- Add other fields as needed -->
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-primary">Save
                                                                    changes</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>



                                            <!-- Modal Delete-->
                                            <div class="modal fade" id="deleteModal{{ $dt->id_buku }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Delete Template
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Are you sure you want to delete this template?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <form action="{{ route('buku.destroy', $dt->id_buku) }}"
                                                                method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger">Yes,
                                                                    Delete</button>
                                                            </form>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">No,
                                                                Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
