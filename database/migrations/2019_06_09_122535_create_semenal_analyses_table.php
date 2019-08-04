<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemenalAnalysesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semenal_analyses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lab_id')->unsigned();
            $table->string('volume')->nullable();
            $table->string('color')->nullable();
            $table->string('ph')->nullable();
            $table->string('gravity')->nullable();
            $table->string('min30')->nullable();
            $table->string('hour')->nullable();
            $table->string('wbc')->nullable();
            $table->string('rbc')->nullable();
            $table->string('motility')->nullable();
            $table->string('progression')->nullable();
            $table->string('sperm_count')->nullable();
            $table->string('normal_cells')->nullable();
            $table->string('abnormal_cells')->nullable();
            $table->string('double_head')->nullable();
            $table->string('pin_head')->nullable();
            $table->string('ballon_head')->nullable();
            $table->string('double_tail')->nullable();
            $table->string('short_tail')->nullable();
            $table->string('long_tail')->nullable();

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
        Schema::dropIfExists('semenal_analyses');
    }
}
