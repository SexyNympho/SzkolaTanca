<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MateuszT
 * Date: 27/10/13
 * Time: 12:55
 * To change this template use File | Settings | File Templates.
 */

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
    
    public function __construct()
    {
        $this->id = 0;
    }
}