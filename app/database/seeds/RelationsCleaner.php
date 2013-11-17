<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RelationsCleaner
 *
 * @author MateuszT
 */
class RelationsCleaner extends DatabaseSeeder 
{
    public function run()
    {
        DB::table('danceEvents_images')->truncate();
        DB::table('dance_event_dance_style')->truncate();
    }
}
