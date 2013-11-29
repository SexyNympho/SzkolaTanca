<?php

class SignInVM extends ViewModel
{
    public $Login;
    public $Password;
    
    public function GetBindableProperties() 
    {
        return array('Login', 'Password');
    }    
}
