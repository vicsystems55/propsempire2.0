<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subscription_plan_id')->unsigned();
            $table->string('plan_name');
            $table->bigInteger('agent_id')->unsigned();
            $table->string('slug');
            $table->string('duration')->default('1');
            $table->double('subscription_plan_cost');
            $table->double('total_cost');
            $table->string('expiry_date');
            $table->string('status')->default('active');

            $table->foreign('agent_id')->references('id')->on('users');
            $table->foreign('subscription_plan_id')->references('id')->on('subscription_plans');
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
        Schema::dropIfExists('member_subscriptions');
    }
}
