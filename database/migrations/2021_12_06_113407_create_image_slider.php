<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageSlider extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_slider', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("image_id");
            $table->unsignedBigInteger("slider_id");
            $table->timestamps();

            $table->foreign("image_id")->references("id")->on("images");
            $table->foreign("slider_id")->references("id")->on("sliders");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_slider');
    }
}
