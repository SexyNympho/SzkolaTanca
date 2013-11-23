<?php

class DanceStyle extends Eloquent {
    public $timestamps = false;

    protected $table = 'DanceStyles';
    
    protected $fillable = array('description', 'name');

    public function danceClasses()
    {
        return $this->hasMany('DanceClass');
    }
    
    public function events()
    {
        return $this->belongsToMany('DanceEvent');
    }
    
    public function photos()
    {
        return $this->belongsToMany('Image', 'danceStyles_images', 'danceStyleId', 'imageId');
    }
    
    public function prices()
    {
        return $this->hasOne('DanceStylePrice', 'danceStyleId');
    }
    
    public function __construct()
    {
        $this->id = 0;
    }
}