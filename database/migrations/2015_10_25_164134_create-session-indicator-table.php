<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionIndicatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      /*
            A session indicator is a question that is asked during the process and answers provided and scored accordingly 
        */
    public function up()
    {
        Schema::create('session_indicator', function(Blueprint $table) {
			$table->increments('indicator_id');
            $table->string('name');
            $table->string('description', 100);
            $table->boolean('voided')->default(false);
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
        Schema::drop('session_indicator');
    }
}
