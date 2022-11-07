<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiPemeliharaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bi_pemeliharaan', function (Blueprint $table) {
            $table->id();
            $table->integer('bulan');
            $table->string('biaya_untuk');
            $table->double('jumlah_biaya',20,2);
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
        Schema::dropIfExists('bi_pemeliharaan');
    }
}
