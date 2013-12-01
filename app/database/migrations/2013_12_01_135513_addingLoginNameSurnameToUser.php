<?php

use Illuminate\Database\Migrations\Migration;

class AddingLoginNameSurnameToUser extends Migration {

    public function up()
    {
        Schema::table('Users', function($t){
            $t->string('name');
            $t->string('surname');
            $t->string('login');
        });
    }

    public function down()
    {
        Schema::table("Users", function($t){
            $t->dropColumn('name');
            $t->dropColumn('surname');
            $t->dropColumn('login');
        });
    }

}