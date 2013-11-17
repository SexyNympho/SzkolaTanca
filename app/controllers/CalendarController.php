<?php

class CalendarController extends BaseController
{
    public function Index()
    {
        $dt = new DateTime();
        return $this->SpecificMonth($dt->format('Y'), $dt->format('n'));
    }
    
    public function SpecificMonth($year, $month)
    {
        $calendarArray = array();
        $calendar = new Calendar($year, $month);
        
        do
        {
            $calendarArray[] = array(
                'cal' => $calendar->Now()->format('j'),
                'current' => $calendar->IsCurrentMonth(),
                'events' => DanceEvent::where('eventDate', 'like', $calendar->Now()->format('Y-m-d'))->get()
                );
        }
        while($calendar->Next());
        
        return View::make('calendar/index', array(
            'calendarArray' => $calendarArray, 
            'nextCalendarData' => $calendar->NextMonthCalendarData(), 
            'previousCalendarData' => $calendar->PreviousMonthCalendarData())
        );
    }
    
    public function Event($event)
    {
        return View::make('calendar/event', array('event' => $event));
    }
    
    public function SetupReminder()
    {
        $reminder = new Reminder();
        $reminder->email = Input::get('email');
        $reminder->dance_event_id = Input::get('dance_event_id');
        if ($this->ReminderExists($reminder))
        {
            return View::make('calendar/reminder', array('reminder' => $reminder, 'message' => 'The reminder was already there, mate!'));
        }
        
        $reminder->save();
        
        if (is_null($reminder->id))
        {
            return 'dupa blada z remindera';
        }
        else
        {
            return View::make('calendar/reminder', array('reminder' => $reminder));
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
        
        return View::make('calendar/edit', array('danceEventVM' => $danceEventVM));
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
            return Redirect::action('CalendarController@AddEvent')->withErrors($validator);
        }
        
        $binder = new DanceEventBinder();
        if (!$binder->SaveModel(Input::all()))
        {
            return 'error saving model';
        }
        
        return Redirect::action('CalendarController@Index');
    }
}