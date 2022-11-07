<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    use HasFactory;
    protected $table="gaji";
    protected $fillable=["nama_pegawai","slip_gaji","intensif_lain","id_facility_activity"];
    public function trans_fa()
    {
        return $this->belongsTo(trans_fa::class);
    }
}
