<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('from')->unsigned()->nullable();
            $table->string('from_name')->nullable();
            $table->string('from_phone')->nullable();
            $table->string('from_email')->nullable();
            $table->string('prop_slug')->nullable();
            $table->bigInteger('to_id')->unsigned()->nullable();
            $table->string('to_name')->nullable();
            $table->string('title')->nullable();
            $table->string('body')->nullable();
            $table->string('status')->default('unread');


            $table->foreign('from')->references('id')->on('users');
            $table->foreign('to_id')->references('id')->on('users');
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
        Schema::dropIfExists('messages');
    }
}
