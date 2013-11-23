<?php

use Illuminate\Database\Migrations\Migration;

class AddingStylePrices extends Migration {

    public function up()
    {
        Schema::create('stylePrices', function($t)
        {
            $t->increments('id');
            $t->integer('danceStyleId');
            $t->integer('single');
            $t->integer('quadruple');
            $t->integer('octuple');
            $t->date('updated_at');
            $t->date('created_at');
        });
    }

    public function down()
    {
        Schema::drop('stylePrices');
    }

}