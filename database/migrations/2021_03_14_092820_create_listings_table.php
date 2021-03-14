<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->bigInteger('posted_by')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('location');
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('subtype_id')->unsigned();

            $table->integer('bedrooms')->unsigned()->default('0');
            $table->integer('toilets')->unsigned()->default('0');
            $table->integer('bathrooms')->unsigned()->default('0');
            $table->string('parking')->nullable()->default('0');

            $table->string('total_area')->nullable();
            $table->string('covered_area')->nullable();
            $table->double('price');
            $table->string('discount')->default('0');
            $table->string('status')->default('inactive');

            $table->boolean('premium')->default(0);
            $table->boolean('frontpage_featured')->default(0);

            $table->integer('views')->default('0');
            $table->integer('likes')->default('0');
            $table->integer('unlikes')->default('0');
          

          

            $table->foreign('posted_by')->references('id')->on('users');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('subtype_id')->references('id')->on('listing_sub_types');
            
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
        Schema::dropIfExists('listings');
    }
}
