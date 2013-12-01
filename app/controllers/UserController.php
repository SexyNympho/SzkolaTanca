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
        $signUpVM = new SignUpVM();
        
        return View::make('users/signUpForm', array('vm' => $signUpVM));
    }
    
    public function PostSignUp(SignUpVM $vm)
    {
        $user = new User();
        $user->email = $vm->email;
        $user->password = Hash::make($vm->password);
        $user->name = $vm->name;
        $user->surname = $vm->surname;
        $user->login = $vm->login;
        $user->save();
        $userRole = Role::where('name', 'User')->get();
        $user->roles()->attach($userRole->first()->id);
        
        return Redirect::route('home');
    }
}