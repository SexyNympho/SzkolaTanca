<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserSeeder
 *
 * @author MateuszT
 */
class UserSeeder extends DatabaseSeeder{
    public function run()
    {
        DB::table('users')->truncate();
        
        $user = new User;
        $user->email = 'antlanik@gmail.com';
        $user->password = Hash::make('dupa2');
        $user->save();
        
        $user = new User;
        $user->email = 'tarnas14@gmail.com';
        $user->password = Hash::make('dupa2');
        $user->save();
    }
}
