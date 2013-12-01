<?php

class ReminderSender 
{
    public function Send(DateTime $date)
    {
        $dbFormat = $date->format('Y-m-d');
        $reminders = Reminder::where('sendDate', 'like', $dbFormat)->get();
        
        foreach($reminders as $reminder)
        {
            $data = array('reminder' => $reminder, 'event' => $reminder->danceEvent());
            Mail::send('emails/event/reminder', $data, function($m) use ($reminder)
            {
                $m->to($reminder->email)->subject('Event reminder');
            });
        }
    }
}
