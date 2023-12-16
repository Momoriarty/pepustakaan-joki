<?php

namespace App\Http\Controllers;

use App\Models\pengembalian;
use Illuminate\Http\Request;

class pengembalianController extends Controller
{
    public function index()
    {
        $data = pengembalian::all();
        return view('admin.table.pengembalian', compact('data'));
    }

    public function create()
    {
        return view('admin.table.form_tambah_pengembalian');
        // Menampilkan formulir untuk membuat tugas baru
    }

    public function store(Request $request)
    {
        // Menyimpan tugas baru ke database
        $pengembalian = new pengembalian;
        $pengembalian->tgl_pengembalian = new \DateTime($request->input('tgl_pengembalian'));
        $pengembalian->tgl_dikembalikan = new \DateTime($request->input('tgl_dikembalikan'));

        if ($pengembalian->tgl_dikembalikan > $pengembalian->tgl_pengembalian) {
            // Calculate the difference in days
            $differenceInDays = $pengembalian->tgl_dikembalikan->diff($pengembalian->tgl_pengembalian)->days;

            // Calculate the penalty per day
            $penaltyPerDay = 5000;

            // Set the penalty
            $pengembalian->denda = $differenceInDays * $penaltyPerDay;
        } else {
            // If the return date is not later than the due date, set the penalty to 0
            $pengembalian->denda = 0;
        }

        $pengembalian->id_buku = $request->input('id_buku');
        $pengembalian->id_anggota = $request->input('id_anggota');
        $pengembalian->id_petugas = $request->input('id_petugas');
        $pengembalian->save();

        return redirect()->route('pengembalian.index');
    }

    public function show(pengembalian $pengembalian)
    {
        // Menampilkan tugas tertentu
    }

    public function edit(pengembalian $pengembalian)
    {
        // Menampilkan formulir untuk mengedit tugas
    }

    public function update(Request $request, $id)
    {
        // Validate the request data as needed
        $pengembalian = pengembalian::find($id);
        $pengembalian->update($request->all());

        return redirect()->route('pengembalian.index')->with('success', 'Book updated successfully');
    }

    public function destroy($id)
    {
        pengembalian::destroy($id);

        return redirect()->route('pengembalian.index')->with('success', 'Book deleted successfully');
    }
}
