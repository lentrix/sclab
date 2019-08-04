<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodChemistriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_chemistries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lab_id')->unsigned();
            $table->string('fbs')->nullable();
            $table->string('rbs_cbs')->nullable();
            $table->string('hprbs')->nullable();
            $table->string('creatinine')->nullable();
            $table->string('uric_acid')->nullable();
            $table->string('total_cholesterol')->nullable();
            $table->string('triglycerides')->nullable();
            $table->string('hdl_c')->nullable();
            $table->string('ldl_c')->nullable();
            $table->string('vldl')->nullable();
            $table->string('sgot')->nullable();
            $table->string('sgpt')->nullable();
            $table->string('sodium')->nullable();
            $table->string('potassium')->nullable();
            $table->string('bun')->nullable();
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
        Schema::dropIfExists('blood_chemistries');
    }
}
