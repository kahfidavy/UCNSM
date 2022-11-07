<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk_layanan extends Model
{
    use HasFactory;
    protected $table="produk_layanan";
    public function aktivitas(){
        return $this->belongsToMany(aktivitas::class,'rel_produk_aktivitas',
            'id_produk','id_aktivitas');
    }
}
