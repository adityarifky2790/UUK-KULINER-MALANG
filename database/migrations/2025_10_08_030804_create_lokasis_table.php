<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('lokasi', function (Blueprint $table) {
    $table->id('id_lokasi');
    $table->string('nama_daerah');
    $table->string('alamat_lengkap')->nullable();
    $table->text('keterangan')->nullable();
    $table->string('gambar')->nullable();
    $table->timestamps();
});

    }

    
    public function down(): void
    {
        Schema::dropIfExists('lokasi');
    }
};
