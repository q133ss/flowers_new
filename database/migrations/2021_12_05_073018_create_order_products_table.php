<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('color_id');
            $table->unsignedInteger('price')->nullable();
            $table->unsignedTinyInteger('score')->nullable();
            $table->unsignedTinyInteger('sale')->nullable();
            $table->unsignedTinyInteger('charge')->nullable();
            $table->unsignedBigInteger('qty');
            $table->string('delivery_date');
            $table->timestamps();
            
            $table->foreign('color_id', 'order_products_color_id_foreign')->references('id')->on('colors');
            $table->foreign('order_id', 'order_products_order_id_foreign')->references('id')->on('orders');
            $table->foreign('product_id', 'order_products_product_id_foreign')->references('id')->on('products');
            $table->foreign('size_id', 'order_products_size_id_foreign')->references('id')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_products');
    }
}
