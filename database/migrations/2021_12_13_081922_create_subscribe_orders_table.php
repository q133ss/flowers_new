<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscribeOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscribe_orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subscribe_id');
            $table->bigInteger('reciver');
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('reciver_name')->nullable();
            $table->string('reciver_phone')->nullable();
            $table->string('city');
            $table->string('check_the_adress');
            $table->string('delivery_time');
            $table->string('street');
            $table->string('home');
            $table->string('podezd');
            $table->string('etage');
            $table->bigInteger('kvartira');
            $table->string('call_reciver')->nullable();
            $table->string('outside_city');
            $table->string('give_photo');
            $table->string('big_cart');
            $table->string('card_text')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('subscribe_orders');
    }
}
