<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class beban_fa_ke_unit extends Model
{
    use HasFactory;
    protected $table="beban_fa_ke_unit";
    protected $fillable=["id_mt_bagian","id_facility_activity","jumlah_cost_driver"];
    public function trans_fa()
    {
        return $this->belongsTo(trans_fa::class);
    }
}
