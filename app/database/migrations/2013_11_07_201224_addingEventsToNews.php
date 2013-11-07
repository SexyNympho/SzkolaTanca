<?php

use Illuminate\Database\Migrations\Migration;

class AddingEventsToNews extends Migration {

    private $newsTable = 'News';
    private $eventId = 'dance_event_id';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->newsTable, function($t){
            $t->smallInteger($this->eventId)/*->nullable()->default(null)*/;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->newsTable, function($t){
            $t->dropColumn($this->eventId);
        });
    }

}