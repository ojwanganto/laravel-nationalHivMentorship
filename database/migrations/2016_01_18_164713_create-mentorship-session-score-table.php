<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMentorshipSessionScoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /*
            This is a table that stores scores for individual indicators on the session tool
        */
        Schema::create('session_score', function(Blueprint $table) {
			$table->increments('session_score_id');
            $table->integer('session_id')->unsigned()->default(0);
            $table->integer('indicator_id')->unsigned()->default(0);
            $table->foreign('session_id')->references('session_id')->on('mentorship_session');
            $table->foreign('indicator_id')->references('indicator_id')->on('session_indicator');
            $table->integer('score');
            $table->string('comment', 100);
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
        Schema::drop('session_score');
    }
}
