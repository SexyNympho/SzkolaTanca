<?php

class ReminderSeeder extends DatabaseSeeder
{
    public function run()
    {
        $reminder = new Reminder;
        $reminder->dance_event_id = 3;
        $reminder->email = 'tarnas14@gmail.com';
        $reminder->save(); 
   }
}
