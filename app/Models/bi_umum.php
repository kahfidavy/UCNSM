<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bi_umum extends Model
{
    use HasFactory;
    protected $table="bi_umum";
    protected $fillable=["bulan","listrik","telpon","air","id_facility_activity"];
    public function trans_fa()
    {
        return $this->belongsTo(trans_fa::class);
    }
}
