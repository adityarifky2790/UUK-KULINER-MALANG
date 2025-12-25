<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primaryKey = 'id_category';
    protected $fillable = ['nama_category', 'keterangan', 'gambar', 'status'];

    public function kuliner()
    {
        return $this->hasMany(\App\Models\Kuliner::class, 'id_category', 'id_category');
    }
}
