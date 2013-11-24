<?php

class DanceStylePrice extends Eloquent implements IBindable 
{
    protected $table = 'stylePrices';
    
    protected $fillable = array('single', 'quadruple', 'octuple');
    
    public function danceStyle() {
        return $this->belongsTo('DanceStyle', 'danceStyleId');
    }

    public function GetBindableProperties() {
        return $this->fillable;
    }

}
