<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDengueDuosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dengue_duos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lab_id')->unsigned();
            $table->string('ns1')->nullable();
            $table->string('igm')->nullable();
            $table->string('igg')->nullable();

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
        Schema::dropIfExists('dengue_duos');
    }
}
