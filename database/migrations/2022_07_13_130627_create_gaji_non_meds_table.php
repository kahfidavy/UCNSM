<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiNonMedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji_non_med', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->double('slip_gaji',20,2);
            $table->double('intensif_lain',20,2);
            $table->bigInteger('id_trans_bagian')->unsigned();
            $table->foreign('id_trans_bagian')->on('trans_bagian')->references('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaji_non_med');
    }
}
