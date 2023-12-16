<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = "peminjaman";
    protected $primaryKey = 'id_peminjam';
    protected $guarded = ['id_peminjam'];
    protected $fillable = [
        'tgl_peminjam',
        'tgl_pengembalian',
        'id_buku',
        'id_anggota',
        'id_petugas',
    ];
}
