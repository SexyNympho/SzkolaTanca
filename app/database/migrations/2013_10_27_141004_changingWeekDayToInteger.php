<?php

use Illuminate\Database\Migrations\Migration;

class ChangingWeekDayToInteger extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('DanceClasses', function($t){
            $t->dropColumn('weekDay');
        });

        Schema::table('DanceClasses', function($t){
            $t->smallInteger('weekDay');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('DanceClasses', function($t)
        {
            $t->dropColumn('weekDay');
        });

        Schema::table('DanceClasses', function($t){
            $t->string('weekDay');
        });
	}

}