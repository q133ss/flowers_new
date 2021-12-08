<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductPathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_paths', function (Blueprint $table) {
            $table->id();
            $table->string('model', 50);
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('product_id');
            $table->string('status', 50);
            $table->unsignedInteger('price')->nullable();
            $table->unsignedTinyInteger('score')->nullable();
            $table->unsignedTinyInteger('sale')->nullable();
            $table->unsignedTinyInteger('charge')->nullable();
            $table->timestamps();
            
            $table->foreign('product_id', 'product_paths_product_id_foreign')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_paths');
    }
}
