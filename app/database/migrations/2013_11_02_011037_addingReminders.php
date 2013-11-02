<?php

use Illuminate\Database\Migrations\Migration;

class AddingReminders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('reminders', function($t){
                $t->increments('id');
                $t->string('email');
                $t->smallInteger('dance_event_id');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('reminders');
	}

}