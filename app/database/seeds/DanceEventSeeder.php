<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EventSeeder
 *
 * @author Gośka
 */
class DanceEventSeeder extends DatabaseSeeder
{
    public function run()
    {
        DB::table('danceEvents')->truncate();
        
        $event = new DanceEvent();
        $event->title = 'testEventTitle';
        $event->description = "test event description";
        $event->eventDate = '2013-11-20';
        $event->save();
        
        $event = new DanceEvent();
        $event->title = 'test multiple';
        $event->description = 'testing multiple events during the same day';
        $event->eventDate = '2013-11-20';
        $event->save();
        
        DanceEvent::create(array('title' => "test event title", 'description' => 'test event description', 'eventDate' => '2013-11-13'));
    }
}