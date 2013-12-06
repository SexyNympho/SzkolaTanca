<?php

/**
 * Description of Truncate
 *
 * @author MateuszT
 */
class Truncate extends DatabaseSeeder
{
    public function run()
    {
        DB::table('comments')->truncate();
        DB::table('danceClasses')->truncate();
        DB::table('instructors')->truncate();
        DB::table('danceStyles')->truncate();
        DB::table('stylePrices')->truncate();
        DB::table('danceEvents')->truncate();
        DB::table('images')->truncate();
        DB::table('news')->truncate();
        DB::table('reminders')->truncate();
        DB::table('users')->truncate();
        DB::table('Roles')->truncate();

    }
}
