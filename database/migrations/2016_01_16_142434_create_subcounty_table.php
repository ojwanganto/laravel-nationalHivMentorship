<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubcountyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
      Schema::create('subcounty', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',75);
            $table->integer('county_id')->unsigned();
            $table->foreign('county_id')->references('id')->on('county');
                   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('subcounty');
    }
}
