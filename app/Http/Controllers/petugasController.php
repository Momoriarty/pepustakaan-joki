<?php

namespace App\Http\Controllers;

use App\Models\petugas;
use Illuminate\Http\Request;

class petugasController extends Controller
{
    public function index()
    {
        $data = petugas::all();
        return view('admin.table.petugas', compact('data'));
    }

    public function create()
    {
        // Menampilkan formulir untuk membuat tugas baru
    }

    public function store(Request $request)
    {
        // Menyimpan tugas baru ke database
    }

    public function show(petugas $petugas)
    {
        // Menampilkan tugas tertentu
    }

    public function edit(petugas $petugas)
    {
        // Menampilkan formulir untuk mengedit tugas
    }

    public function update(Request $request, petugas $petugas)
    {
        // Memperbarui tugas dalam database
    }

    public function destroy(petugas $petugas)
    {
        // Menghapus tugas dari database
    }
}

?>
