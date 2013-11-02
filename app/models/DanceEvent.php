<?php

class DanceEvent extends Eloquent
{
    protected $table = "danceEvents";
    
    public $timestamps = false;

    protected $fillable = array(
        'title', 
        'description', 
        'eventDate'
    );
}