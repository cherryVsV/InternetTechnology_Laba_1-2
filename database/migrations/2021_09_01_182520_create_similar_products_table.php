<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimilarProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('similar_products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product1_id')->unsigned();
            $table->foreign('product1_id')
                ->references('id')->on('products');
            $table->bigInteger('product2_id')->unsigned();
            $table->foreign('product2_id')
                ->references('id')->on('products');
            $table->integer('previous_price');
            $table->integer('new_price');
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
        Schema::dropIfExists('similar_products');
    }
}
