<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;

    protected $table = 'lokasi';
    protected $primaryKey = 'id_lokasi';
    protected $fillable = ['nama_daerah', 'alamat_lengkap', 'keterangan', 'gambar'];
    public $timestamps = true; 

    public function kuliner()
{
    return $this->hasMany(\App\Models\Kuliner::class, 'id_lokasi', 'id_lokasi');
}

}

