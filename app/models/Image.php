<?php

class Image extends Eloquent {
    
    public $fillable = array('filename');
    
    public function Path()
    {
        return Configuration::$ImagesUploadPath . $this->filename;
    }
}
