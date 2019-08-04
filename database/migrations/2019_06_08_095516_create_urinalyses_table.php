<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrinalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urinalyses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lab_id')->unsigned();
            $table->string('color')->nullable();
            $table->string('transparency')->nullable();
            $table->string('pus_cells')->nullable();
            $table->string('rbc')->nullable();
            $table->string('epithelial_cells')->nullable();
            $table->string('yeast_cells')->nullable();
            $table->string('cylindroids')->nullable();
            $table->string('mucus_threads')->nullable();
            $table->string('bacteria')->nullable();
            $table->string('ph')->nullable();
            $table->string('spec_gravity')->nullable();
            $table->string('protein')->nullable();
            $table->string('glucose')->nullable();
            $table->string('coarsely_granular')->nullable();
            $table->string('finely_granular')->nullable();
            $table->string('hyaline')->nullable();
            $table->string('pus_cast')->nullable();
            $table->string('waxy_cast')->nullable();
            $table->string('wbc_cast')->nullable();
            $table->string('ammonium_biurates')->nullable();
            $table->string('amorphus_urates')->nullable();
            $table->string('amorphus_phosphates')->nullable();
            $table->string('calcium_oxalates')->nullable();
            $table->string('triple_phosphates')->nullable();
            $table->string('uric_acid')->nullable();
            $table->string('cholesterole')->nullable();
            $table->string('leucine_crystals')->nullable();
            $table->string('other_findings')->nullable();

            $table->foreign('lab_id')->references('id')->on('labs');
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
        Schema::dropIfExists('urinalyses');
    }
}
