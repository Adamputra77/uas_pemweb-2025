<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('informasi_kendaraans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kendaraan');
            $table->string('merk');
            $table->string('tipe');
            $table->integer('tahun');
            $table->string('warna');
            $table->text('deskripsi')->nullable();
            $table->string('gambar')->nullable();
            $table->foreignId('komunitas_id')->nullable()->constrained('komunitas')->onDelete('set null');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('informasi_kendaraans');
    }
};
