<?php

namespace App\Http\Controllers;

use App\Models\rak;
use Illuminate\Http\Request;

class rakController extends Controller
{
    public function index()
    {
        $data = rak::all();
        return view('admin.table.rak', compact('data'));
    }

    public function create()
    {
        // Menampilkan formulir untuk membuat tugas baru
    }

    public function store(Request $request)
    {
        // Menyimpan tugas baru ke database
    }

    public function show(rak $rak)
    {
        // Menampilkan tugas tertentu
    }

    public function edit(rak $rak)
    {
        // Menampilkan formulir untuk mengedit tugas
    }

    public function update(Request $request, rak $rak)
    {
        // Memperbarui tugas dalam database
    }

    public function destroy(rak $rak)
    {
        // Menghapus tugas dari database
    }
}

?>
