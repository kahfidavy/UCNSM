<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeyBagian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('beban_fa_ke_unit', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
            $table->unsignedBigInteger('id_mt_bagian');
            $table->foreign('id_mt_bagian')->references('id')->on('mt_bagian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
