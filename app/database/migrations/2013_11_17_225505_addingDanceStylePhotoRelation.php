<?php

use Illuminate\Database\Migrations\Migration;

class AddingDanceStylePhotoRelation extends Migration {

    private $relationTName = 'danceStyles_images';
    
    public function up()
    {
        Schema::create($this->relationTName, function($t){
            $t->integer('imageId');
            $t->integer('danceStyleId');
        });
    }

    public function down()
    {
        Schema::drop($this->relationTName);
    }

}