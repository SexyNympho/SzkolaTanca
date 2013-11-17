<?php

use Illuminate\Database\Migrations\Migration;

class DanceEventDanceStyleManyToManyRelation extends Migration {

    private $relationTName = 'dance_event_dance_style';
    
    public function up()
    {        
        Schema::create($this->relationTName, function($t){
            $t->integer('dance_event_id');
            $t->integer('dance_style_id');
        });
    }

    public function down()
    {
        Schema::drop($this->relationTName);
    }

}