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
            $table->string('gender');
            $table->string('phone_number');
            $table->string('email');
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_no');
            $table->string('residential_address');
            $table->string('business_category');
            $table->string('business_name');
            $table->string('business_location');
            $table->string('discount_permitted');
            $table->string('payment_method');
            $table->string('rc_number');
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
