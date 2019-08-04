<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSputaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sputa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lab_id')->unsigned();
            
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
        Schema::dropIfExists('sputa');
    }
}
