<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHematologiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hematologies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lab_id')->unsigned();
            $table->string('wbc')->nullable();
            $table->string('rbc')->nullable();
            $table->string('hemoglobin')->nullable();
            $table->string('hematocrit')->nullable();
            $table->string('platelet')->nullable();
            $table->string('retic_count')->nullable();
            $table->string('esr')->nullable();
            $table->string('stabs')->nullable();
            $table->string('segmenters')->nullable();
            $table->string('lymphocytes')->nullable();
            $table->string('monocytes')->nullable();
            $table->string('eosinophils')->nullable();
            $table->string('basophils')->nullable();
            $table->string('clotting_time')->nullable();
            $table->string('bleeding_time')->nullable();
            $table->string('clot_observation_time')->nullable();
            $table->string('blood_type')->nullable();

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
        Schema::dropIfExists('hematologies');
    }
}
