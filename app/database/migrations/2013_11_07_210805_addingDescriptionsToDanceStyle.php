<?php

use Illuminate\Database\Migrations\Migration;

class AddingDescriptionsToDanceStyle extends Migration {

    private $danceStyleTableName = 'DanceStyles';
    private $newColumnName = 'description';
    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table($this->danceStyleTableName, function($t){
            $t->text($this->newColumnName);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->danceStyleTableName, function($t){
            $t->dropColumn($this->newColumnName);
        });
    }

}