<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id('id_category');
            $table->string('nama_category');
            $table->text('keterangan')->nullable();
            $table->varchar('gambar')->change(); 
            $table->boolean('status')->default(true); 
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('kategori', function (Blueprint $table) {
            $table->varchar('gambar', 255)->change(); 
        });
    }
};