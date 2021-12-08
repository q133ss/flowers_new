<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class FixFkallTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::table('cities', function (Blueprint $table) {
//            $table->unsignedBigInteger('region_id')->change();
//            $table->foreign('region_id')->references('id')->on('regions');
//            $table->integer('order');
//        });

//        Schema::table('regions', function (Blueprint $table) {
//            $table->unsignedBigInteger('country_id')->change();
//            $table->foreign('country_id')->references('id')->on('countries');
//            $table->integer('order');
//        });


//        Schema::table('news_comments', function (Blueprint $table) {
//            $table->unsignedBigInteger('news_id')->change();
//            $table->foreign('news_id')->references('id')->on('news');
//            $table->unsignedBigInteger('author_id')->change();
//            $table->foreign('author_id')->references('id')->on('users');
//        });

//        Schema::table('notification_users', function (Blueprint $table) {
//            $table->unsignedBigInteger('user_id')->change();
//            $table->foreign('user_id')->references('id')->on('users');
//            $table->dropColumn('notifications_id');
//            $table->unsignedBigInteger('notifications_id')->change();
//            $table->foreign('notifications_id')->references('id')->on('notifications');
//        });


//        Schema::table('orders', function (Blueprint $table) {
//            $table->dropColumn('userId');
//            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('users');
//        });

//        Schema::table('order_photos', function (Blueprint $table) {
//            $table->unsignedBigInteger('order_id')->change();
//            $table->foreign('order_id')->references('id')->on('orders');
//        });
//
//        Schema::table('order_user_products', function (Blueprint $table) {
//            $table->dropColumn('userId');
//            $table->dropColumn('productId');
//            $table->unsignedBigInteger('product_id');
//            $table->foreign('product_id')->references('id')->on('products');
//            $table->unsignedBigInteger('order_id');
//            $table->foreign('order_id')->references('id')->on('orders');
//        });
//
//        Schema::rename('order_user_products', 'order_products');
//
//        Schema::table('photos', function (Blueprint $table) {
//            $table->unsignedBigInteger('product_id')->change();
//            $table->foreign('product_id')->references('id')->on('products');
//        });
//
//        Schema::table('product_reviews', function (Blueprint $table) {
//            $table->unsignedBigInteger('product_id')->change();
//            $table->foreign('product_id')->references('id')->on('products');
//
//            $table->unsignedBigInteger('user_id')->change();
//            $table->foreign('user_id')->references('id')->on('users');
//        });
//
//
//        Schema::table('product_views', function (Blueprint $table) {
//            $table->unsignedBigInteger('product_id')->change();
//            $table->foreign('product_id')->references('id')->on('products');
//
//            $table->unsignedBigInteger('user_id')->change();
//            $table->foreign('user_id')->references('id')->on('users');
//        });
//
//        Schema::table('reviews_photos', function (Blueprint $table) {
//            $table->unsignedBigInteger('review_id')->change();
//            $table->foreign('review_id')->references('id')->on('reviews');
//        });
//
//        Schema::table('subscribe_orders', function (Blueprint $table) {
//            $table->unsignedBigInteger('subscribe_id')->change();
//            $table->foreign('subscribe_id')->references('id')->on('subscribes');
//        });
//
//        Schema::table('user_events', function (Blueprint $table) {
//            $table->unsignedBigInteger('user_id')->change();
//            $table->foreign('user_id')->references('id')->on('users');
//        });

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
