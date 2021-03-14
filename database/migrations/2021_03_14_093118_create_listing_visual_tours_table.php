<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingVisualToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_visual_tours', function (Blueprint $table) {
            $table->id();
            $table->string('listing_slug');
            $table->bigInteger('listing_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('video_url');
            $table->string('description')->nullable();
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
        Schema::dropIfExists('listing_visual_tours');
    }
}
