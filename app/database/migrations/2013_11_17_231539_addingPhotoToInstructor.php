<?php

use Illuminate\Database\Migrations\Migration;

class AddingPhotoToInstructor extends Migration {

    private $TName = 'Instructors';
    private $photoIdCName = 'photoId';
    
    public function up()
    {
        Schema::table($this->TName, function($t){
            $t->integer($this->photoIdCName);
        });
    }

    public function down()
    {
        Schema::table($this->TName, function($t){
            $t->dropColumn($this->photoIdCName);
        });
    }

}