<?php

class Reminder extends Eloquent
{
        public function __construct()
        {
            parent::__construct();
            $this->lazilyLoadedDanceEvent = null;
        }
    
	public $timestamps = false;

	protected $fillable = array('email', 'dance_event_id');
        
        public function danceEvent()
        {
            return $this->LazyLoadDanceEvent();
        }
        
        private function LazyLoadDanceEvent()
        {
            if (!$this->IsProperDanceEventLoaded() && isset($this->dance_event_id))
            {
                $this->lazilyLoadedDanceEvent = DanceEvent::find($this->dance_event_id);
            }
            
            return $this->lazilyLoadedDanceEvent;
        }
        
        private function IsProperDanceEventLoaded()
        {
            return (!is_null($this->lazilyLoadedDanceEvent) && $this->lazilyLoadedDanceEvent->id == $this->dance_event_id);
        }
        
        private $lazilyLoadedDanceEvent;
}