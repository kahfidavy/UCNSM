<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dep_alat_non extends Model
{
    use HasFactory;
    protected $table="dep_alat_non";
    protected $fillable=["nama_barang","jumlah","satuan","harga","masa_hidup","id_facility_activity"];
    public function trans_fa()
    {
        return $this->belongsTo(trans_fa::class);
    }
}
