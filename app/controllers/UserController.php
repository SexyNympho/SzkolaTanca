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
        $signUpVM = new UserVM();
        
        return View::make('users/signUpForm', array('vm' => $signUpVM));
    }
    
    public function PostSignUp(UserVM $vm)
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
    
    public function UsersUD()
    {
        View::composer('users/usersUD', function($v){
            $v->with('users', User::all());
            
            $roles = array();
            foreach(Role::all() as $role)
            {
                $roles[$role->id] = $role->Name;
            }
            $v->with('rolesDropdown', $roles);
        });        
        return View::make('users/usersUD');
    }
    
    public function DeleteUser($user)
    {
        foreach($user->roles as $role)
        {
            $user->roles()->detach($role->id);
        }
        
        $user->delete();
        
        return Redirect::route('usersUD');
    }
    
    public function PostUpdateUser($user)
    {
        $user->update(Input::all());
        
        $role = Input::get('role');
        
        $user->RemoveRoles();
        $user->roles()->attach($role);
        
        return Redirect::route('usersUD');
    }
}