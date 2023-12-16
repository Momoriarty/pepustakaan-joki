<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rak extends Model
{
    use HasFactory;

    protected $table = "rak";
    protected $primaryKey = 'id_rak';
    protected $guarded = ['id_rak'];
    protected $fillable = [
        'nama_rak',
        'lokasi_rak',
        'id_buku',
    ];
}
