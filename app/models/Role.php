<?php

class Role extends Eloquent
{
    public $timestamps = false;
    public $table = 'Roles';
    public $fillable = array('Name');
    
    public function users()
    {
        return $this->belongsToMany('User');
    }
}
