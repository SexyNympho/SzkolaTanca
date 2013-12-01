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
            'previousCalendarData' => $calendar->PreviousMonthCalendarData(),
            'title' => $calendar->Title(),
        ));
    }
}