<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ImageSeeder
 *
 * @author MateuszT
 */
class ImageSeeder extends DatabaseSeeder
{
    public function run()
    {
        DB::table('images')->truncate();
    }
}
