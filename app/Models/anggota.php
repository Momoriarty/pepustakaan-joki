<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $table = "anggota";
    protected $primaryKey = 'id_anggota';
    protected $guarded = ['id_anggota'];
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'no_telp',
        'alamat',
        'email',
        'password',
        
    ];
}
