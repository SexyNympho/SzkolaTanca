<?php

class EventController extends BaseController 
{
    public function Index($event)
    {
        return View::make('event/index', array('event' => $event));
    }
    
    public function SetupReminder()
    {
        $reminder = new Reminder();
        $reminder->email = Input::get('email');
        $reminder->dance_event_id = Input::get('dance_event_id');
        $eventDate = new DateTime(Input::get('eventDate'));
        $aDayEarlier = new DateInterval('P1D');
        $aDayEarlier->invert = 1;
        $reminder->sendDate = $eventDate->add($aDayEarlier);
        if ($this->ReminderExists($reminder))
        {
            return View::make('event/reminder', array('reminder' => $reminder, 'message' => 'The reminder was already there, mate!'));
        }
        
        $reminder->save();
        
        if (is_null($reminder->id))
        {
            return 'could not add a reminder';
        }
        else
        {
            return View::make('event/reminder', array('reminder' => $reminder));
        }
    }
    
    private function ReminderExists(Reminder $reminder)
    {
        $reminders = Reminder::whereRaw('email = ? and dance_event_id = ?', array($reminder->email, $reminder->dance_event_id))->get();
        
        return count($reminders) != 0;
    }
    
    public function AddEvent()
    {
        $danceEventVM = new EventAddEditVM();
        $danceEventVM->stylesDropdown = $this->GetStylesDropdown();
        
        return View::make('event/edit', array('danceEventVM' => $danceEventVM));
    }
    
    private function GetStylesDropdown()
    {
        $stylesArray = array();
        $styles = DanceStyle::all();
        
        foreach($styles as $style)
        {
            $stylesArray[$style->id] = $style->name;
        }
        
        return $stylesArray;
    }
    
    public function PostAddEvent()
    {
        $eventVM = new EventAddEditVM();
        $validator = Validator::make(Input::all(), $eventVM->ValidationRules());
        
        if ($validator->fails())
        {
            return Redirect::action('EventController@AddEvent')->withErrors($validator);
        }
        
        $binder = new DanceEventBinder();
        if (!$binder->SaveModel(Input::all()))
        {
            return 'error creating event';
        }
        
        return Redirect::action('CalendarController@Index');
    }
}
