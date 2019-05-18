<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabTestItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lab_test_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('lab_test_id')->unsigned();
            $table->bigInteger('template_item_id')->unsigned();
            $table->string('test_value')->nullable();

            $table->foreign('lab_test_id')->references('id')->on('lab_tests');
            $table->foreign('template_item_id')->references('id')->on('template_items');
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
        Schema::dropIfExists('lab_test_items');
    }
}
