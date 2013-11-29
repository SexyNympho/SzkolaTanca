<?php

class UserSeeder extends DatabaseSeeder{
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('Roles')->truncate();
        
        $adminRole = new Role;
        $adminRole->Name = 'Admin';
        $adminRole->save();
        
        $userRole = new Role;
        $userRole->Name = 'User';
        $userRole->save();
        
        $user = new User;
        $user->email = 'tarnas14@gmail.com';
        $user->password = Hash::make('dupa2');
        $user->save();
        $user->roles()->attach($userRole->id);
        
        $user = new User;
        $user->email = 'antlanik@gmail.com';
        $user->password = Hash::make('dupa2');
        $user->save();
        $user->roles()->attach($adminRole->id);
    }
}
