<?php

use Illuminate\Database\Migrations\Migration;

class AddingDateToReminder extends Migration {

    public function up()
    {
        Schema::table('reminders', function($t)
        {
            $t->date('sendDate');
        });
    }

    public function down()
    {
        Schema::table('reminders', function($t)
        {
            $t->dropColumn('sendDate');
        });
    }

}