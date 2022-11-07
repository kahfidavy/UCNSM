<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bi_lain extends Model
{
    use HasFactory;
    protected $table="bi_lain";
    protected $fillable=["bulan","biaya_untuk","jumlah_biaya","id_facility_activity"];
    public function trans_fa()
    {
        return $this->belongsTo(trans_fa::class);
    }
}
