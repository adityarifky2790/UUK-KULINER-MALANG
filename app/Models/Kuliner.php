<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    use HasFactory;

    protected $table = 'kuliner';
    protected $primaryKey = 'id_kuliner';
    protected $fillable = [
        'nama_kuliner', 'id_category', 'id_lokasi',
        'harga', 'deskripsi', 'gambar', 'tanggal_ditambahkan',
        'rating', 'nama_yang_menambahkan'
    ];

    public $timestamps = false;

    public function kategori()
    {
           return $this->belongsTo(\App\Models\Kategori::class, 'id_category', 'id_category');
    }

    public function lokasi()
    {
        return $this->belongsTo(\App\Models\Lokasi::class, 'id_lokasi', 'id_lokasi');
    }
}
