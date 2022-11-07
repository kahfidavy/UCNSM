<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignKeyFa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('dep_gedung', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
        });
        Schema::table('dep_alat_non', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
        });
        Schema::table('dep_kendaraan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
        });
        Schema::table('gaji', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
        });
        Schema::table('bhp', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
        });
        Schema::table('bi_umum', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
        });
        Schema::table('bi_lain', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
        });
        Schema::table('bi_pemeliharaan', function (Blueprint $table) {
            $table->unsignedBigInteger('id_facility_activity');
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->unsignedBigInteger('id_trans_fa');
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
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
