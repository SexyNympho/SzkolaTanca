<?php

class News extends Eloquent
{
	protected $table = 'News';

	protected $fillable = array('title', 'newsText');
        
        public function lead()
        {
            return substr($this->newsText, 0, 200);
        }
        
        public function hasMoreThanLead()
        {
            return strlen($this->newsText) > 200;
        }
}