<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Komunitas;

class KomunitasSeeder extends Seeder
{
    /**
     * Jalankan seeding data untuk tabel komunitas.
     */
    public function run(): void
    {
        Komunitas::insert([
            [
                'nama_komunitas' => 'Cafe Racer Lovers',
                'deskripsi' => 'Komunitas pecinta motor Cafe Racer'
            ],
            [
                'nama_komunitas' => 'Chopper Riders Indonesia',
                'deskripsi' => 'Penggemar motor chopper di Indonesia'
            ],
            [
                'nama_komunitas' => 'Scrambler Adventurers',
                'deskripsi' => 'Komunitas scrambler untuk petualang'
            ],
        ]);
    }
}
