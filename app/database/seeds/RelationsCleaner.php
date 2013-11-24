<?php

class RelationsCleaner extends DatabaseSeeder 
{
    public function run()
    {
        DB::table('danceEvents_images')->truncate();
        DB::table('dance_event_dance_style')->truncate();
        DB::table('danceStyles_images')->truncate();
    }
}
