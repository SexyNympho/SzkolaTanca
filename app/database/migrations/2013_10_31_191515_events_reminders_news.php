<?php

use Illuminate\Database\Migrations\Migration;

class EventsRemindersNews extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
            Schema::create('News', function($t) {
                $t->increments('id');
                $t->string('title');
                $t->text('newsText');
                $t->datetime('created_at');
                $t->datetime('updated_at');
            });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
            Schema::drop('News');
	}
}