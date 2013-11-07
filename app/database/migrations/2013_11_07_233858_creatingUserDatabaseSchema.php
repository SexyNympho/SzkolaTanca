<?php

use Illuminate\Database\Migrations\Migration;

class CreatingUserDatabaseSchema extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("users", function($t){
            $t->increments('id');
            $t->string('email');
            $t->string('password', 128);
            $t->date('created_at');
            $t->date('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("users");
    }

}