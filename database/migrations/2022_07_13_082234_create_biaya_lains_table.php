<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiayaLainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biaya_lain', function (Blueprint $table) {
            $table->id();
            $table->integer('bulan');
            $table->string('keterangan');
            $table->decimal('jumlah_biaya','20','2');
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
        Schema::dropIfExists('biaya_lain');
    }
}
