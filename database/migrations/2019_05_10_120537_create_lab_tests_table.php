<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_tests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('template_id')->unsigned();
            $table->bigInteger('patient_id')->unsigned();
            $table->string('physician')->nullable();
            $table->string('med_tech')->nullable();
            $table->string('pathologist')->nullable();
            $table->bigInteger('created_by')->unsigned();
            $table->string('remarks')->nullable();
            $table->boolean('closed')->default(0);

            $table->foreign('template_id')->references('id')->on('templates');
            $table->foreign('patient_id')->references('id')->on('patients');
            $table->foreign('created_by')->references('id')->on('users');
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
        Schema::dropIfExists('lab_tests');
    }
}
