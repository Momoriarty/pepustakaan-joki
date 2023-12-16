<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    protected $primaryKey = 'id_buku';
    protected $guarded = ['id_buku'];
    protected $fillable = [
        'kode_buku',
        'judul_buku',
        'penerbit_buku',
        'tehun_terbit',
        'pengarang',
        'kategori',
        'stok',
        'gambar',
    ];
}
