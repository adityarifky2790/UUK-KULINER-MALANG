<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
    Schema::create('kuliner', function (Blueprint $table) {
    $table->id('id_kuliner');
    $table->string('nama_kuliner');
    $table->unsignedBigInteger('id_category');
    $table->unsignedBigInteger('id_lokasi');
    $table->bigInteger('harga');
    $table->text('deskripsi')->nullable();
    $table->varchar('gambar')->nullable();
    $table->timestamp('tanggal_ditambahkan')->nullable();
    $table->float('rating', 2, 1)->nullable(); 
    $table->string('nama_yang_menambahkan')->nullable();

    $table->timestamps(); 
});


    }

    
    public function down(): void
    {
        Schema::dropIfExists('kuliners');
    }
};
