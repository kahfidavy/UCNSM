<?php

namespace App\Models\tkDua;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahan extends Model
{
    use HasFactory;
    protected $table='bahan';
    public function trans_bagian()
    {
        return $this->belongsTo(trans_bagian::class);
    }
}
