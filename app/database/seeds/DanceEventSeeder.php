<?php

class DanceEventSeeder extends DatabaseSeeder
{
    public function run()
    {
       
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
        $event->danceStyles()->attach(DanceStyle::find(1));
        
        $event = new DanceEvent;
        $event->title = "test event title";
        $event->description = 'test event description';
        $event->eventDate = '2013-11-13';
        $event->save();
        $event->danceStyles()->attach(DanceStyle::find(2));
        
    }
}