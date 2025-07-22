<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiKendaraan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kendaraan',
        'merk',
        'tipe',
        'tahun',
        'warna',
        'deskripsi',
        'gambar',
        'komunitas_id',
    ];

    public function komunitas()
    {
        return $this->belongsTo(Komunitas::class);
    }
}
