<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->index('product_sizes_product_id_foreign');
            $table->unsignedBigInteger('size_id')->index('product_sizes_size_id_foreign');
            $table->boolean('is_main');
            $table->bigInteger('price');
            $table->unsignedTinyInteger('sale')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->integer('score')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_sizes');
    }
}
