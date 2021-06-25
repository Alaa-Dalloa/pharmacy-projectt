<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('name_trade');
            $table->string('price');
            $table->string('count');
            $table->string('size');
            $table->string('start_date');
            $table->string('end_date');
            $table->text('detailes');
            $table->string('warning_using');
            $table->string('offers');
            $table->bigInteger('catigory_id');
            $table->bigInteger('brand_id');
            $table->bigInteger('gauge_id');

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
        Schema::dropIfExists('products');
    }
}
