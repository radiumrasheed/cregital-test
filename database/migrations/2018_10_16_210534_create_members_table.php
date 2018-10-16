<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('districts');
            $table->string('surname');
            $table->string('first_name');
            $table->string('password');
            $table->string('gender');
            $table->string('phone_number');
            $table->string('email');
            $table->string('residential_address');
            $table->string('business_category');
            $table->string('business_name');
            $table->string('business_location');
            $table->string('discount_permitted');
            $table->string('payment_method');
            $table->string('subscription_mode');
            $table->string('monthly_subscription_rates');
            $table->string('quarterly_subscription_rates');
            $table->string('annually_subscription_rates');
            $table->string('rc_number');
            $table->string('delivery_services');
            $table->string('name_of_care_group_leader');
            $table->string('care_group');
            $table->string('telephone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
