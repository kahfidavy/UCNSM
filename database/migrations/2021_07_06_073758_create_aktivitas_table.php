<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAktivitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->tinyInteger('klasifikasi');
            $table->float('waktu');
            $table->timestamps();
        });
        Schema::create('rel_produk_aktivitas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_produk')->unsigned();
            $table->bigInteger('id_aktivitas')->unsigned();
            $table->foreign('id_produk')->references('id')->on('produk_layanan');
            $table->foreign('id_aktivitas')->references('id')->on('aktivitas');
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
        Schema::dropIfExists('rel_produk_aktivitas');
        Schema::dropIfExists('aktivitas');
    }
}
