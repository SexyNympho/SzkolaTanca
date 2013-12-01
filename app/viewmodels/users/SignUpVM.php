<?php

class SignUpVM extends ViewModel 
{
    public $email;
    public $password;
    public $name;
    public $surname;
    public $login;
    
    public function GetBindableProperties() {
        return array('email', 'password', 'name', 'surname', 'login');
    }
}
