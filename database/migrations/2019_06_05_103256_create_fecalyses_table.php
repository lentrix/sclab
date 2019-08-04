<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFecalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fecalyses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lab_id')->unsigned();
            $table->string('color')->nullable();
            $table->string('consistency')->nullable();
            $table->string('blood')->nullable();
            $table->string('mucos')->nullable();
            $table->string('ova')->nullable();
            $table->string('ascaris')->nullable();
            $table->string('trichuris')->nullable();
            $table->string('hookworm')->nullable();
            $table->string('others')->nullable();
            $table->string('entamoeba')->nullable();
            $table->string('tropozoites')->nullable();
            $table->string('cysts')->nullable();
            $table->string('trichomonas')->nullable();
            $table->string('yeast_cells')->nullable();
            $table->string('pus_cells')->nullable();
            $table->string('rbc')->nullable();
            $table->string('bacteria')->nullable();
            $table->string('fat_globules')->nullable();
            $table->string('tfob')->nullable();//test of occult blood
            $table->timestamps();

            $table->foreign('lab_id')->references('id')->on('labs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fecalyses');
    }
}
