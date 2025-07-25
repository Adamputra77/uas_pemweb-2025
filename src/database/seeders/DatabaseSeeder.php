<?php

namespace Database\Seeders;

use App\Models\InformasiKendaraan;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
        KomunitasSeeder::class,
        InformasiKendaraanSeeder::class,
        RoleSeeder::class,
        UserSeeder::class,
    ]);

    }
}
