<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('receiver_name')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('delivery_city');
            $table->string('delivery_date');
            $table->bigInteger('check_the_date')->nullable();
            $table->string('street');
            $table->bigInteger('home_number');
            $table->bigInteger('entrance');
            $table->bigInteger('floor');
            $table->bigInteger('flat')->nullable();
            $table->string('delivery_time');
            $table->string('deliver_outside');
            $table->string('call_customer');
            $table->string('give_photo');
            $table->string('card');
            $table->string('card_text')->nullable();
            $table->string('big_card');
            $table->string('big_card_text')->nullable();
            $table->bigInteger('delivery_price')->nullable();
            $table->bigInteger('status')->default(0);
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->index('orders_user_id_foreign');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
