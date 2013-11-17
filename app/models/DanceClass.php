<?php

class DanceClass extends Eloquent
{
    public $timestamps = false;

    public function instructor()
    {
        return $this->belongsTo('Instructor');
    }

    public function danceStyle()
    {
        return $this->belongsTo('DanceStyle');
    }

    protected $table = 'DanceClasses';

    protected $fillable = array('level', 'classDate', 'duration', 'weekDay', 'instructor_id', 'dance_style_id');
}