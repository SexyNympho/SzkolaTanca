<?php

use Illuminate\Database\Migrations\Migration;

class AddStylesInstructorsUpdateDanceClasses extends Migration {

    private $danceClassesTable = 'DanceClasses';
    private $danceStyleTbl = 'DanceStyles';
    private $instructorT = 'Instructors';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table($this->danceClassesTable, function($table)
        {
            $table->smallInteger('duration');
            $table->string('level');
            $table->smallInteger('instructor_id');
            $table->smallInteger('dance_style_id');
        });

        Schema::create($this->danceStyleTbl, function($table){
            $table->increments('id');
            $table->string('name');
        });

        Schema::create($this->instructorT, function($t){
            $t->increments('id');
            $t->string('name');
            $t->string('surname');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table($this->danceClassesTable, function($table){
            $table->dropColumn('duration', 'level', 'instructor_id', 'dance_style_id');
        });

        Schema::drop($this->danceStyleTbl);

        Schema::drop($this->instructorT);
	}

}