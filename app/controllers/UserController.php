<?php

class UserController extends BaseController 
{
    public function PostSignIn(SignInVM $vm)
    {
        $redirect = Redirect::intended(route('home'));
        
        if (!Auth::attempt(array('email' => $vm->Login, 'password' => $vm->Password)))
        {
            $errorArray = array("signInError" => array("error signing in"));
            $redirect = $redirect->withErrors($errorArray);
        }
        
        return $redirect;
    }
    
    public function SignUp()
    {
        return 'sign up here';
    }
}