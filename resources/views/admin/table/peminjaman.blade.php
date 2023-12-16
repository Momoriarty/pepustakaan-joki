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
                                <h3 class="card-title">Data Peminjaman</h3>
                            </div>
                            <div class="col-md-3 ml-3">
                                <a href="{{ route('peminjaman.create') }}" class="btn btn-success">+ Tambah</a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">No</th>
                                            <th>Tanggal peminjam</th>
                                            <th>Tanggal pengembalian</th>
                                            <th>Id Buku</th>
                                            <th>Id anggota</th>
                                            <th>Id Petugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $dt)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $dt->tgl_peminjam }}</td>
                                                <td>{{ $dt->tgl_pengembalian }}</td>
                                                <td>{{ $dt->id_buku }}</td>
                                                <td>{{ $dt->id_anggota }}</td>
                                                <td>{{ $dt->id_petugas }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-warning mb-1" data-toggle="modal"
                                                        data-target="#kembalimodal{{ $dt->peminjam }}">
                                                        Kembalikan
                                                    </button>
                                                    <button type="button" class="btn btn-warning mb-1" data-toggle="modal"
                                                        data-target="#editModal{{ $dt->peminjam }}">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-danger mb-1" data-toggle="modal"
                                                        data-target="#deleteModal{{ $dt->peminjam }}">
                                                        Hapus
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Modal Pengembalian -->
                                            <div class="modal fade" id="kembalimodal{{ $dt->peminjam }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Pengembalian
                                                                Buku</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{ route('pengembalian.store') }}" method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Id Buku</label>
                                                                    <input type="text" name="id_buku"
                                                                        class="form-control" id="editIdBuku" readonly
                                                                        value="{{ $dt->id_buku }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdAnggota">Id Anggota</label>
                                                                    <input type="text" name="id_anggota"
                                                                        class="form-control" id="editIdAnggota" readonly
                                                                        value="{{ $dt->id_anggota }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdPetugas">Id Petugas</label>
                                                                    <input type="text" name="id_petugas"
                                                                        class="form-control" id="editIdPetugas" readonly
                                                                        value="{{ $dt->id_petugas }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editTglPengembalian">Tanggal
                                                                        Pengembalian</label>
                                                                    <input type="date" name="tgl_pengembalian"
                                                                        class="form-control" id="editTglPengembalian"
                                                                        readonly value="{{ $dt->tgl_pengembalian }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="">Tanggal
                                                                        Di Kembalikan</label>
                                                                    <input type="date" name="tgl_dikembalikan"
                                                                        class="form-control" id="">
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

                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="editModal{{ $dt->peminjam }}" tabindex="-1"
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
                                                        <form action="{{ url('peminjaman.update', $dt->id_peminjam) }}"
                                                            method="post" enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="modal-body">
                                                                <!-- Displayed fields in the table row -->
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Tanggal Kembali</label>
                                                                    <input type="date" name="tanggal_kembali"
                                                                        class="form-control" id="editIdanggota"
                                                                        value="{{ $dt->tanggal_kembali }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editKodeBuku">denda</label>
                                                                    <input type="text" name="denda"
                                                                        class="form-control" id="editKodeBuku"
                                                                        value="{{ $dt->denda }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Id buku</label>
                                                                    <input type="text" name="id_buku"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->id_buku }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Id Naggota</label>
                                                                    <input type="text" name="id_anggota"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->id_anggota }}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="editIdBuku">Id Petugas</label>
                                                                    <input type="text" name="id_petugas"
                                                                        class="form-control" id="editIdBuku"
                                                                        value="{{ $dt->id_petugas }}">
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
                                            <div class="modal fade" id="deleteModal{{ $dt->id_peminjam }}"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
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
                                                            <form
                                                                action="{{ route('peminjaman.destroy', $dt->id_peminjam) }}"
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
