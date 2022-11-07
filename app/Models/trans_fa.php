<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trans_fa extends Model
{
    use HasFactory;
    protected $table="trans_fa";
    public function dep_gedung()
    {
        return $this->hasMany(dep_gedung::class, 'id_trans_fa', 'id');
    }
    public function dep_kendaraan()
    {
        return $this->hasMany(dep_kendaraan::class, 'id_trans_fa', 'id');
    }
    public function dep_alat_non()
    {
        return $this->hasMany(dep_alat_non::class, 'id_trans_fa', 'id');
    }
    public function gaji()
    {
        return $this->hasMany(gaji::class, 'id_trans_fa', 'id');
    }
    public function bhp()
    {
        return $this->hasMany(bhp::class, 'id_trans_fa', 'id');
    }
    public function bi_umum()
    {
        return $this->hasMany(bi_umum::class, 'id_trans_fa', 'id');
    }
    public function bi_lain()
    {
        return $this->hasMany(bi_lain::class, 'id_trans_fa', 'id');
    }
    public function bi_pemeliharaan()
    {
        return $this->hasMany(bi_pemeliharaan::class, 'id_trans_fa', 'id');
    }
    public function beban_fa_ke_unit()
    {
        return $this->hasMany(beban_fa_ke_unit::class, 'id_trans_fa', 'id');
    }
    public function jml_cost_driver()
    {
        return $this->hasMany(jml_cost_driver::class, 'id_trans_fa', 'id');
    }
}
