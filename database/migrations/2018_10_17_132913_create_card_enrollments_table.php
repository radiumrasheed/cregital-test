<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardEnrollmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_enrollments', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('email_address');
	        $table->string('church_group');
	        $table->string('district');
	        $table->date('dob');
	        $table->string('gender');
	        $table->string('surname');
	        $table->string('firstname');
	        $table->string('middlename');
	        $table->string('mobile_number');
	        $table->string('residential_address');
	        $table->string('bvn');
	        $table->string('passport_name')->nullable();
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
        Schema::dropIfExists('card_enrollments');
    }
}
