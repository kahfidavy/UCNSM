<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dep_gedung extends Model
{
    use HasFactory;
    protected $table="dep_gedung";
    protected $fillable=["nama_gedung","luas","harga","masa_hidup","id_facility_activity"];
    public function trans_fa()
    {
        return $this->belongsTo(trans_fa::class);
    }
    public function getTot(){

    }
}
