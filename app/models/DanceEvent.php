<?php

class DanceEvent extends Eloquent
{
    protected $table = "danceEvents";
    
    public $timestamps = false;

    public function danceStyles()
    {
        return $this->belongsToMany('DanceStyle');
    }
    
    protected $fillable = array(
        'title', 
        'description', 
        'eventDate'
    );
}