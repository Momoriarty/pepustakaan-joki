<?php

namespace App\Http\Controllers;

use App\Models\peminjaman;
use Illuminate\Http\Request;

class peminjamanController extends Controller
{
    public function index()
    {
        $data = peminjaman::all();
        return view('admin.table.peminjaman', compact('data'));
    }

    public function create()
    {
        return view('admin.table.form_tambah_peminjaman');
        // Menampilkan formulir untuk membuat tugas baru
    }

    public function store(Request $request)
    {
        // Menyimpan tugas baru ke database
        $peminjaman = new peminjaman;
        $peminjaman->tgl_peminjam = $request->input('tgl_peminjam');
        $peminjaman->tgl_pengembalian = $request->input('tgl_pengembalian');
        $peminjaman->id_buku = $request->input('id_buku');
        $peminjaman->id_anggota = $request->input('id_anggota');
        $peminjaman->id_petugas = $request->input('id_petugas');
        $peminjaman->save();

        return redirect()->route('peminjaman.index');
    }

    public function show(peminjaman $peminjaman)
    {
        // Menampilkan tugas tertentu
    }

    public function edit(peminjaman $peminjaman)
    {
        // Menampilkan formulir untuk mengedit tugas
    }

    public function update(Request $request, $id)
{
    // Find the peminjaman record by ID
    $peminjaman = Peminjaman::find($id);

    // Update the peminjaman record with the data from the request
    $peminjaman->update([
        'tanggal_kembali' => $request->input('tanggal_kembali'),
        'denda' => $request->input('denda'),
        'id_buku' => $request->input('id_buku'),
        'id_anggota' => $request->input('id_anggota'),
        'id_petugas' => $request->input('id_petugas'),
        // Add other fields as needed
    ]);

    // Redirect back to the index page with a success message
    return redirect()->route('peminjaman.index')->with('success', 'Book updated successfully');
}

    public function destroy($id)
    {
        peminjaman::destroy($id);

        return redirect()->route('peminjaman.index')->with('success', 'Book deleted successfully');
    }
}
