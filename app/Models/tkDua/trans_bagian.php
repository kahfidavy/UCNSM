<?php

namespace App\Models\tkDua;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_bagian extends Model
{
    use HasFactory;
    protected $table='trans_bagian';
    public function bahan(){
        return $this->hasMany(bahan::class,'id_trans_bagian','id');
    }
}
