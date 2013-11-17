<?php
class EventAddEditVM implements IViewModel {
    public $eventTitle;
    public $eventDescription;
    public $eventDate;
    public $eventStyles;
    
    public $stylesDropdown;
    
    public function ValidationRules()
    {
        $rules = array();
        
        $rules['eventTitle'] = 'required';
        $now = new DateTime();
        $format = 'Y-m-d';
        $rules['eventDate'] = array('required', 'date', 'date_format:'.$format, 'after:'.$now->format($format));
        
        return $rules;
    }
}