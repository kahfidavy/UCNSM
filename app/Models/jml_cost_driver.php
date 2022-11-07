<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jml_cost_driver extends Model
{
    use HasFactory;
    protected $table="jml_cost_driver";
    protected $fillable=['id_facility_activity','id_trans_fa','jumlah'];
    public function trans_fa()
    {
        return $this->belongsTo(trans_fa::class);
    }
}
