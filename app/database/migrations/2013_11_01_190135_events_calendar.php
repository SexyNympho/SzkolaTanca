<?php

use Illuminate\Database\Migrations\Migration;

class EventsCalendar extends Migration {

    private $tableName = 'danceEvents';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function($t){
            $t->increments('id');
            $t->string('title');
            $t->text('description');
            $t->date('eventDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tableName);
    }

}