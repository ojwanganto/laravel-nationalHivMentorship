<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
          schema for system wide person: user, mentor, mentee
        */
        Schema::create('person', function (Blueprint $table) {
            $table->increments('person_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('gender');
            $table->string('cadre');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('facility');
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
        Schema::drop('person');
       
    }
}
