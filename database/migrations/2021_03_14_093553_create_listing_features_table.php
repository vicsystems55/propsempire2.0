<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listing_features', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('listing_id')->unsigned();
            $table->bigInteger('property_feature_id')->unsigned();
            $table->string('status')->default('active');

            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('property_feature_id')->references('id')->on('property_features');
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
        Schema::dropIfExists('listing_features');
    }
}
