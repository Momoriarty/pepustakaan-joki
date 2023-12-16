<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class anggotaController extends Controller
{
    public function index()
    {
        $data = anggota::all();
        return view('admin.table.anggota', compact('data'));
    }

    public function create()
    {
        return view('admin.table.form_tambah_anggota');
        // Menampilkan formulir untuk membuat tugas baru
    }

    public function store(Request $request)
    {
        $anggota = new anggota;
        $anggota->nama = $request->input('nama');
        $anggota->jenis_kelamin = $request->input('jenis_kelamin');
        $anggota->no_telp = $request->input('no_telp');
        $anggota->alamat = $request->input('alamat');
        $anggota->email = $request->input('email');
        $anggota->password = Hash::make($request->input('password'));
        $anggota->save();

        return redirect()->route('anggota.index');
        // Menyimpan tugas baru ke database
    }

    public function show(anggota $anggota)
    {
        // Menampilkan tugas tertentu
    }

    public function edit(anggota $anggota)
    {
        // Menampilkan formulir untuk mengedit tugas
    }

    public function update(Request $request, $id)
    {
        // Validate the request data as needed
        $anggota = anggota::find($id);
        $anggota->update($request->all());

        return redirect()->route('anggota.index')->with('success', 'Book updated successfully');
    }

    public function destroy($id)
    {
        anggota::destroy($id);

        return redirect()->route('anggota.index')->with('success', 'Book deleted successfully');
    }
}
