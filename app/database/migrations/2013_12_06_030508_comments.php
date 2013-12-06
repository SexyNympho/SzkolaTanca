<?php

use Illuminate\Database\Migrations\Migration;

class Comments extends Migration {

    public function up()
    {
        Schema::create('comments', function($t){
            $t->increments('id');
            $t->text('content');
            $t->datetime('created_at');
            $t->datetime('updated_at');
            $t->integer('userId');
        });
    }

    public function down()
    {
        Schema::drop('comments');
    }

}