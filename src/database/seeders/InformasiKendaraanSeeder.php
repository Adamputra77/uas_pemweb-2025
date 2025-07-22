<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InformasiKendaraan;

class InformasiKendaraanSeeder extends Seeder
{
    public function run(): void
    {
        InformasiKendaraan::create([
            'nama_kendaraan' => 'Custom Cafe Racer X',
            'merk' => 'Yamaha',
            'tipe' => 'Cafe Racer',
            'tahun' => 2018,
            'warna' => 'Hitam',
            'deskripsi' => 'Motor custom bergaya cafe racer dengan mesin 250cc, performa tinggi dan desain minimalis.',
            'gambar' => 'gambar/cafe_racer_x.jpg',
            'komunitas_id' => 1,
        ]);

        InformasiKendaraan::create([
            'nama_kendaraan' => 'Chopper Thunder',
            'merk' => 'Honda',
            'tipe' => 'Chopper',
            'tahun' => 2015,
            'warna' => 'Merah',
            'deskripsi' => 'Motor chopper custom dengan rangka panjang dan mesin bertenaga besar, cocok untuk touring.',
            'gambar' => 'gambar/chopper_thunder.jpg',
            'komunitas_id' => 2,
        ]);

        InformasiKendaraan::create([
            'nama_kendaraan' => 'Scrambler Adventurer',
            'merk' => 'Kawasaki',
            'tipe' => 'Scrambler',
            'tahun' => 2020,
            'warna' => 'Hijau Army',
            'deskripsi' => 'Scrambler untuk petualang, tahan banting dan siap untuk medan offroad ringan.',
            'gambar' => 'gambar/scrambler_adventurer.jpg',
            'komunitas_id' => 3,
        ]);
    }
}
