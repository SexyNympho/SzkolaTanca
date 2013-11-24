<?php

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
