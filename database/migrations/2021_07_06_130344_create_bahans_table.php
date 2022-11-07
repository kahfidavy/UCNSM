<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_produk_layanan')->unsigned();
            $table->foreign('id_produk_layanan')->references('id')->on('produk_layanan');
            $table->string('nama_bahan');
            $table->float('kebutuhan');
            $table->string('satuan');
            $table->decimal('harga',11,2);
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
        Schema::dropIfExists('bahan');
    }
}
