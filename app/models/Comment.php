<?php

/**
 * Description of Comment
 *
 * @author MateuszT
 */
class Comment extends Eloquent implements IBindable
{
    
    protected $fillable = array('content', 'userId');
    
    public function user()
    {
        return $this->belongsTo('User', 'userId');
    }

    public function GetBindableProperties() 
    {
        return $this->fillable;
    }

}
