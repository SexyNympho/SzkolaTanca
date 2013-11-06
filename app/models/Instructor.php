<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MateuszT
 * Date: 27/10/13
 * Time: 12:54
 * To change this template use File | Settings | File Templates.
 */

class Instructor extends Eloquent {

    public $timestamps = false;

    protected $table = 'Instructors';

    protected $fillable = array('name', 'surname', 'description');
    
    public function danceClasses()
    {
        return $this->hasMany('DanceClass');
    }
}