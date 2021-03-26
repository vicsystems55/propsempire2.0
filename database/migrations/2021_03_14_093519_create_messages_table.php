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
            $table->string('from_name');
            $table->string('from_phone');
            $table->string('from_email');
            $table->string('prop_slug');
            $table->bigInteger('to')->unsigned();
            $table->string('to_name');
            $table->string('title');
            $table->string('body');
            $table->string('status')->default('unread');


            $table->foreign('from')->references('id')->on('users');
            $table->foreign('to')->references('id')->on('users');
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
