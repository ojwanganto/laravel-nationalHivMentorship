<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Facilities', function (Blueprint $table) {
            $table->integer('Facility Code');
            $table->string('Facility Name',75);
            $table->string('Region',25)->nullable();
            $table->string('County',25);
            $table->string('Sub-County',25);
                   });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('Facilities');
    }
}
