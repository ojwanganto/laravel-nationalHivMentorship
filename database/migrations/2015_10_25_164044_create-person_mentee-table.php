<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonMenteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mentee', function(Blueprint $table) {
			$table->increments('mentee_id');
            $table->integer('person_id')->unsigned()->default(0);
			$table->foreign('person_id')->references('person_id')->on('person');
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
        Schema::drop('mentee');
    }
}
