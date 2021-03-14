<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('listing_id')->unsigned();
            $table->bigInteger('_by')->unsigned();

            $table->integer('1star')->unsigned()->default(0);
            $table->integer('2star')->unsigned()->default(0);
            $table->integer('3star')->unsigned()->default(0);
            $table->integer('4star')->unsigned()->default(0);
            $table->integer('5star')->unsigned()->default(0);

            $table->string('status')->default('active');

            $table->foreign('listing_id')->references('id')->on('listings');
            $table->foreign('_by')->references('id')->on('users');
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
        Schema::dropIfExists('ratings');
    }
}
