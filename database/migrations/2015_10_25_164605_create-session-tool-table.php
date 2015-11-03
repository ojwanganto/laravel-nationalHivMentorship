<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionToolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          
        /*
            A session tool is a document containing questions asked during mentorship session
        */
        Schema::create('session_tool', function(Blueprint $table) {
			$table->increments('tool_id');
            $table->string('name');
            $table->string('description', 100);
            $table->string('cadre');
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
        Schema::drop('session_tool');
    }
}
