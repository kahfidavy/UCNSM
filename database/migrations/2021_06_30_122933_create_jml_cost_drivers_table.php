<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJmlCostDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jml_cost_driver', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_facility_activity')->unsigned();
            $table->foreign('id_facility_activity')->references('id')->on('facility_activity');
            $table->bigInteger('id_trans_fa')->unsigned();
            $table->foreign('id_trans_fa')->references('id')->on('trans_fa');
            $table->integer('jumlah');
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
        Schema::dropIfExists('jml_cost_driver');
    }
}
