<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aktivitas extends Model
{
    use HasFactory;
    protected $table="aktivitas";
    public function produk_layanan(){
        return $this->belongsToMany(produk_layanan::class,'rel_produk_aktivitas',
            'id_aktifitas','id_produk');
    }
}
