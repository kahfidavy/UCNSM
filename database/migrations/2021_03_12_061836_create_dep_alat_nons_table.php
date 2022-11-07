<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepAlatNonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_alat_non', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->float('jumlah');
            $table->string('satuan');
            $table->double('harga',20,2);
            $table->integer('masa_hidup');
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
        Schema::dropIfExists('dep_alat_non');
    }
}
