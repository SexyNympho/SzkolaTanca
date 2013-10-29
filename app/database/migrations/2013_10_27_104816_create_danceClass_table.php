<?php

use Illuminate\Database\Migrations\Migration;

class CreateDanceClassTable extends Migration {

    private $newTableName = "DanceClasses";

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->newTableName, function($table){
            $table->increments('id');
            $table->string('weekDay');
            $table->time('classDate');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop($this->newTableName);
	}

}