<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bhp extends Model
{
    use HasFactory;
    protected $table="bhp";
    protected $fillable=["nama_barang","jumlah","satuan","harga","id_facility_activity"];
    public function trans_fa()
    {
        return $this->belongsTo(trans_fa::class);
    }
}
