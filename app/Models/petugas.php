<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class petugas extends Model
{
    use HasFactory;

    protected $table = "petugas";
    protected $primaryKey = 'id_petugas';
    protected $guarded = ['id_petugas'];
    protected $fillable = [
        'username',
        'password',
        'nama_petugas',
        'no_telp',
        'alamat_petugas',
    ];
}
