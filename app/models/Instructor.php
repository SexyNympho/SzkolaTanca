<?php

class Instructor extends Eloquent {

    public $timestamps = false;

    protected $table = 'Instructors';

    protected $fillable = array('name', 'surname', 'description', 'imageId');
    
    public function danceClasses()
    {
        return $this->hasMany('DanceClass');
    }
    
    public function photo()
    {
        return $this->belongsTo('Image', 'photoId');
    }
}