<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->integer('supplier_id')->unsigned();
            $table->string('name');
            $table->integer('base_price');
            $table->integer('total_quantity');
            $table->integer('sold');
            $table->timestamps();

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')->onDelete('cascade');

            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
