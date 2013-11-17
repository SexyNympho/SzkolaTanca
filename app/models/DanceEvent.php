<?php

class DanceEvent extends Eloquent
{
    protected $table = "danceEvents";
    
    public $timestamps = false;

    public function danceStyles()
    {
        return $this->belongsToMany('DanceStyle');
    }
    
    public function photos()
    {
        return $this->belongsToMany('Image', 'danceEvents_images', 'danceEventId', 'imageId');
    }
    
    protected $fillable = array(
        'title', 
        'description', 
        'eventDate'
    );
}