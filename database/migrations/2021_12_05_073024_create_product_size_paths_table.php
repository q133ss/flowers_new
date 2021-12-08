<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizePathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_size_paths', function (Blueprint $table) {
            $table->id();
            $table->string('model', 50);
            $table->unsignedBigInteger('model_id');
            $table->boolean('main')->default(0);
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('size_id');
            $table->string('status', 50);
            $table->unsignedInteger('price')->nullable();
            $table->unsignedTinyInteger('score')->nullable();
            $table->unsignedTinyInteger('sale')->nullable();
            $table->timestamps();
            
            $table->foreign('product_id', 'product_size_paths_product_id_foreign')->references('id')->on('products');
            $table->foreign('size_id', 'product_size_paths_size_id_foreign')->references('id')->on('sizes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_size_paths');
    }
}
