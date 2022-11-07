<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bi_umum', function (Blueprint $table) {
            $table->id();
            $table->integer('bulan');
            $table->double('listrik',20,2);
            $table->double('telpon',20,2);
            $table->double('air',20,2);
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
        Schema::dropIfExists('bi_umum');
    }
}
