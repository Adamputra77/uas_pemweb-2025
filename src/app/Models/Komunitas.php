<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komunitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_komunitas',
        'deskripsi',
    ];

    public function kendaraan()
    {
        return $this->hasMany(InformasiKendaraan::class);
    }
}
