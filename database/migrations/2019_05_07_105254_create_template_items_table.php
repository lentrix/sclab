<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('template_id')->unsigned();
            $table->string('name');
            $table->string('normal');
            $table->integer('order');

            $table->foreign('template_id')->references('id')->on('templates');
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
        Schema::dropIfExists('template_items');
    }
}
