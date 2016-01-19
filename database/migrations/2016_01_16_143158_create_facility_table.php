<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('facility', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mfl_code')->unique();
            $table->string('name',75);
            $table->integer('subcounty_id')->unsigned();
            $table->foreign('subcounty_id')->references('id')->on('subcounty');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('facility');
    }
}
