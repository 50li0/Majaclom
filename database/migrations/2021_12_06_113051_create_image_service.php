<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImageService extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('image_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("image_id");
            $table->unsignedBigInteger("service_id");
            $table->timestamps();

            $table->foreign("image_id")->references("id")->on("images");
            $table->foreign("service_id")->references("id")->on("services");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('image_service');
    }
}
