<?php

use Illuminate\Database\Migrations\Migration;

class AddingRolesToUsers extends Migration {


    public function up()
    {
        Schema::create('Roles', function($t){
            $t->increments('id');
            $t->string('Name');
        });
        
        Schema::create('UsersRoles', function($t){
            $t->integer('userId');
            $t->integer('roleId');
        });
    }

    public function down()
    {
        Schema::drop('Roles');
        Schema::drop('UsersRoles');
    }

}