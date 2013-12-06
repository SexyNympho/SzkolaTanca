<?php

use Illuminate\Database\Migrations\Migration;

class CommentsInNews extends Migration {

    public function up()
    {
        Schema::create('news_comments', function($t){
            $t->increments('id');
            $t->integer('newsId');
            $t->integer('commentId');
        });
    }

    public function down()
    {
        Schmea::drop('news_comments');
    }

}