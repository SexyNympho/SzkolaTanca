<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CalendarController
 *
 * @author Gośka
 */

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
        
        return View::make('calendar/index', array('calendarArray' => $calendarArray));
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
        return View::make('calendar/edit', array('danceEvent' => new DanceEvent));
    }
    
    public function PostAddEvent()
    {
        $danceEvent = new DanceEvent;

        if (!$danceEvent->create(Input::all()))
        {
            return 'dupa blada';
        }

        return Redirect::action('CalendarController@Index');
    }
}