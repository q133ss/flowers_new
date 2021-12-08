<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveManyTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('additional_cats');
        Schema::dropIfExists('additional_reviews');
        Schema::dropIfExists('city_products_prices');
        Schema::dropIfExists('additionally_hides');
        Schema::dropIfExists('additionally_photos');
        Schema::dropIfExists('compilations');
        Schema::dropIfExists('compilation_categories');
        Schema::dropIfExists('compilition_hides');
        Schema::dropIfExists('constructor_city_hides');
        Schema::dropIfExists('constructor_greens');
        Schema::dropIfExists('constructor_orders');
        Schema::dropIfExists('constructor_packages');
        Schema::dropIfExists('constructor_products');
        Schema::dropIfExists('constructor_package_colors');
        Schema::dropIfExists('constructor_product_colors');
        Schema::dropIfExists('constr_cats');
        Schema::dropIfExists('constr_product_colors');
        Schema::dropIfExists('constr_product_sizes');
        Schema::dropIfExists('constr_products');
        Schema::dropIfExists('mono_buqs');
        Schema::dropIfExists('mono_cats');
        Schema::dropIfExists('product_city_hides');
        Schema::dropIfExists('size_variations');
        Schema::dropIfExists('urgentlies');
        Schema::dropIfExists('urgently_colors');
        Schema::dropIfExists('urgently_hides');
        Schema::dropIfExists('urg_orders');
        Schema::dropIfExists('products');

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

//  Schema::dropIfExists('orders');
//        Schema::dropIfExists('order_user_products');

//order_user_products
//quiz_orders
//product_reviews
//product_views

