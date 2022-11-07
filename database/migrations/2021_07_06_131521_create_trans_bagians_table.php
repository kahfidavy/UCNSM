<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransBagiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans_bagian', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_bagian')->unsigned();
            $table->foreign('id_bagian')->on('mt_bagian')->references('id');
            $table->text('keterangan');
            $table->timestamps();
        });
        Schema::table('bahan',function (Blueprint $table){
           $table->unsignedBigInteger('id_trans_bagian');
           $table->foreign('id_trans_bagian')->on('trans_bagian')
               ->references('id');
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
        Schema::dropIfExists('trans_bagian');
    }
}
