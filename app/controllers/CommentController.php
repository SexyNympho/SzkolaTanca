<?php

/**
 * Description of CommentController
 *
 * @author MateuszT
 */
class CommentController extends BaseController
{
    public function PostSave(Comment $vm, $news) 
    {
        $vm->save();
        
        $news->comments()->attach($vm);
        
        return Redirect::route('singleNews', array('news' => $news->id));
    }
}
