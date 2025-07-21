<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('informasi_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kendaraan'); // Nama motor custom
            $table->string('merk'); // Merek motor
            $table->string('tipe'); // Tipe motor (chopper, cafe racer, scrambler, dll)
            $table->integer('tahun'); // Tahun produksi
            $table->string('warna'); // Warna motor
            $table->text('deskripsi')->nullable(); // Deskripsi tambahan
            $table->string('gambar')->nullable(); // Path gambar motor
            $table->timestamps();
        });
    }

    /**
     * Batalkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_kendaraans');
    }
};

