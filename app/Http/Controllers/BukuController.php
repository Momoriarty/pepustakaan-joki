<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::all();
        return view('admin.table.buku', compact('data'));
    }

    public function create()
    {
        return view('admin.table.form_tambah_buku');
        // Menampilkan formulir untuk membuat tugas baru
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // aturan validasi untuk file gambar
        ]);

        $buku = new Buku;
        $buku->kode_buku = $request->input('kode_buku');
        $buku->judul_buku = $request->input('judul_buku');
        $buku->penerbit_buku = $request->input('penerbit_buku');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->pengarang = $request->input('pengarang');
        $buku->kategori = $request->input('kategori');
        $buku->stok = 100;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $namaGambar = time() . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('public/posts'), $namaGambar);
            $buku->gambar = $namaGambar;
        }

        $buku->save();

        return redirect()->route('buku.index');
    }


    public function show(Buku $buku)
    {
        // Menampilkan tugas tertentu
    }

    public function edit(Buku $buku)
    {
        // Menampilkan formulir untuk mengedit tugas
    }

    public function update(Request $request, $id)
    {
        // Validate the request data as needed
        $buku = Buku::find($id);
        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Book updated successfully');
    }

    public function destroy($id)
    {
        Buku::destroy($id);

        return redirect()->route('buku.index')->with('success', 'Book deleted successfully');
    }
}
