<?php

class UserSeeder extends DatabaseSeeder{
    public function run()
    {
        $adminRole = new Role;
        $adminRole->Name = 'Admin';
        $adminRole->save();
        
        $userRole = new Role;
        $userRole->Name = 'User';
        $userRole->save();
        
        $user = new User;
        $user->name = 'Mateusz';
        $user->surname = 'T';
        $user->login = 'tarnas14';
        $user->email = 'tarnas14@gmail.com';
        $user->password = Hash::make('dupa2');
        $user->save();
        $user->roles()->attach($userRole->id);
        
        $user = new User;
        $user->name = 'Aneta';
        $user->surname = 'Kocot';
        $user->login = 'SexyNympho';
        $user->email = 'antlanik@gmail.com';
        $user->password = Hash::make('dupa2');
        $user->save();
        $user->roles()->attach($adminRole->id);
    }
}
