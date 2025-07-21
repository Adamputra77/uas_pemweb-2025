<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiKendaraan extends Model
{
    use HasFactory;

    protected $table = 'informasi_kendaraans';

    // Kolom yang boleh diisi massal (mass assignable)
    protected $fillable = [
        'nama_kendaraan',
        'merk',
        'tipe',
        'tahun',
        'warna',
        'deskripsi',
        'gambar',
    ];
}
