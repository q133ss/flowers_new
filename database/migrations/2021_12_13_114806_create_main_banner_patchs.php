<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainBannerPatchs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('main_banners', function (Blueprint $table) {
            $table->unsignedTinyInteger('status')->nullable();
        });

        Schema::create('main_banner_patchs', function (Blueprint $table) {
            $table->id();
            $table->string('model', 50);
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('banner_id')->index('banner_paths_banner_id_foreign');
            $table->string('img');
            $table->string('link')->nullable();
            $table->unsignedTinyInteger('status')->nullable();
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
        Schema::dropIfExists('main_banner_patchs');
    }
}
