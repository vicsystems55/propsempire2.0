<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_images', function (Blueprint $table) {
            $table->id();
            $table->string('listing_slug');
            $table->bigInteger('listing_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('img_path');
            $table->integer('order')->unsigned();
            $table->string('status')->default('active');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('listing_id')->references('id')->on('listings');
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
        Schema::dropIfExists('listing_images');
    }
}
