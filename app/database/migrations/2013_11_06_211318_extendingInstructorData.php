<?php

use Illuminate\Database\Migrations\Migration;

class ExtendingInstructorData extends Migration {

    private $instructorTable = 'Instructors';

    public function up()
    {
        Schema::table($this->instructorTable, function($t)
            {
                $t->text('description'); 
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table($this->instructorTable, function($t)
            {
                $t->dropColumn('description');
            }
        );
    }

}