<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonMentorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('mentor', function(Blueprint $table) {
			$table->increments('mentor_id');
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
        Schema::drop('mentor');
    }
}
