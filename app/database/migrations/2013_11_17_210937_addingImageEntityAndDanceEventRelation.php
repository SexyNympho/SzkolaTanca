<?php

use Illuminate\Database\Migrations\Migration;

class AddingImageEntityAndDanceEventRelation extends Migration {

    private $danceEventRelation = 'danceEvents_images';
    private $imageTName = 'images';
    
    public function up()
    {
        Schema::create($this->danceEventRelation, function($t){
            $t->integer('danceEventId');
            $t->integer('imageId');
        });
        
        Schema::create($this->imageTName, function($t){
            $t->increments('id');
            $t->string('filename');
            $t->datetime('created_at');
            $t->datetime('updated_at');
        });
    }

    public function down()
    {
        Schema::drop($this->imageTName);
        Schema::drop($this->danceEventRelation);
    }

}