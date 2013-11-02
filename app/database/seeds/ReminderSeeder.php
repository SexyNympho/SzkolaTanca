<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReminderSeeder
 *
 * @author Gośka
 */
class ReminderSeeder extends DatabaseSeeder
{
    public function run()
    {
        DB::table('reminders')->truncate();
        
        $reminder = new Reminder;
        $reminder->dance_event_id = 3;
        $reminder->email = 'tarnas14@gmail.com';
        $reminder->save(); 
   }
}
