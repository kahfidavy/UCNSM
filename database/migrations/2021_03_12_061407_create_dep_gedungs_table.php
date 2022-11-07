<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepGedungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dep_gedung', function (Blueprint $table) {
            $table->id();
            $table->string('nama_gedung');
            $table->float('luas');
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
        Schema::dropIfExists('dep_gedung');
    }
}
