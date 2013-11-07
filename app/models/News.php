<?php

class News extends Eloquent
{
	protected $table = 'News';

	protected $fillable = array('title', 'newsText', 'dance_event_id');
        
        public function lead()
        {
            return substr($this->newsText, 0, 200);
        }
        
        public function hasMoreThanLead()
        {
            return strlen($this->newsText) > 200;
        }
        
        public function danceEvent()
        {
            return $this->belongsTo('DanceEvent');
        }
}