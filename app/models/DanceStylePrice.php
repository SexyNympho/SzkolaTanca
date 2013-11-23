<?php

class DanceStylePrice extends Eloquent {
    protected $table = 'stylePrices';
    
    protected $fillable = array('danceStyleId', 'single', 'quadruple', 'octuple');
    
    public function danceStyle() {
        return $this->belongsTo('DanceStyle', 'danceStyleId');
    }
}
