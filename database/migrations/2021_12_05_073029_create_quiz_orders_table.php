<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_orders', function (Blueprint $table) {
            $table->id();
            $table->string('who');
            $table->string('type');
            $table->string('shade');
            $table->string('quizColorItem');
            $table->string('color1');
            $table->string('color2');
            $table->bigInteger('price');
            $table->bigInteger('userId')->nullable();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('receiver_name')->nullable();
            $table->string('receiver_phone')->nullable();
            $table->string('delivery_city');
            $table->string('delivery_date');
            $table->string('check_the_date')->nullable();
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
            $table->string('product')->nullable();
            $table->bigInteger('status')->default(0);
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
        Schema::dropIfExists('quiz_orders');
    }
}
