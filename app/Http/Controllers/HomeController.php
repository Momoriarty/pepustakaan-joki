<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
        return view('user/index');
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
      
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
     }

    public function destroy($id)
    {
    }
}
