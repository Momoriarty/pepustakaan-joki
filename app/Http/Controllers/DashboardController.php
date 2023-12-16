<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Models\Anggota;
use App\Models\Buku;
use App\Models\peminjaman;


class DashboardController extends Controller
{
    public function index()
    {
        $jumlahAnggota = anggota::count();
        $jumlahBuku = buku::count();
        $peminjaman = peminjaman::count();

        return view('admin.dashboard', compact('jumlahAnggota', 'jumlahBuku','peminjaman'));
    }
}
