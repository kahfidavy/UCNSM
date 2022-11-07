<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlkesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alkes', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->float('jumlah');
            $table->string('satuan');
            $table->double('harga',20,2);
            $table->integer('masa_hidup');
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
        Schema::dropIfExists('alkes');
    }
}
