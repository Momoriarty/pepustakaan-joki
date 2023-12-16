<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengembalian extends Model
{
    use HasFactory;

    protected $table = "pengembalian";
    protected $primaryKey = 'id_pengembalian';
    protected $guarded = ['id_pengembalian'];
    protected $fillable = [
        'tgl_pengembalian',
        'denda',
        'id_buku',
        'id_anggota',
        'id_petugas',
    ];
}
