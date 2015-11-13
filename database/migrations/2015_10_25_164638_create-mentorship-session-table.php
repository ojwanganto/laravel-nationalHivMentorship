<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentorshipSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('mentorship_session', function(Blueprint $table) {
			$table->increments('session_id');
            $table->integer('mentor_id')->unsigned()->default(0);
            $table->integer('mentee_id')->unsigned()->default(0);
            $table->integer('session_tool_id')->unsigned()->default(0);
            $table->foreign('mentor_id')->references('mentor_id')->on('mentor');
            $table->foreign('mentee_id')->references('mentee_id')->on('mentee');
            $table->foreign('session_tool_id')->references('tool_id')->on('session_tool');
            $table->string('facility', 50);
            $table->string('self_reported_gap', 100);
            $table->string('previous_session_gap', 100);
            $table->string('other_gap', 100);
            $table->string('session_objectives',100);
            $table->string('mentee_strength', 100);
            $table->string('mentee_improvement_areas', 100);
            $table->string('session_comments', 100);
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
        Schema::drop('mentorship_session');
    }
}
