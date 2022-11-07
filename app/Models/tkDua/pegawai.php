<?php

namespace App\Models\tkDua;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $table="pegawai";
    public function trans_bagian()
    {
        return $this->belongsTo(trans_bagian::class);
    }
}
