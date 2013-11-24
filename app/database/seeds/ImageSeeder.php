<?php

class ImageSeeder extends DatabaseSeeder
{
    public function run()
    {
        DB::table('images')->truncate();
    }
}
