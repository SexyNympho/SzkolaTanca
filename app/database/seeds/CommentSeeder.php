<?php

/**
 * Description of CommentSeeder
 *
 * @author MateuszT
 */
class CommentSeeder extends DatabaseSeeder
{
    public function run()
    {       
        $com = new Comment;
        $com->content = 'asdfadf';
        $com->save();
        
        $user = User::find(1);
        $com->user()->associate($user);
        $com->push();
        
        $news = News::find(1);
        $news->comments()->attach($com);
    }
}
