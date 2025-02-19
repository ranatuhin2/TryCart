<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthController extends Controller
{
    /* Auth Controller Login Function */


    public function __construct()
    {
        $this->user = new User();
    }

    /* Admin Login View Page Function */
    public function login()
    {
        return view('Admin.login.login');
    }

    /* Admin Login Post Login  Function */
    public function loginSubmit(Request $request)
    {
    
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:5',
        ]);
    
        $email = $request->email;
        $password = $request->password;
        
    
        if (Auth::attempt(['email' => $email, 'password' => $password])) 
        {
            /* User Logged in! */
            Session::put('user_id', Auth::user()->id);
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back();
        }
    }


    /* User Register Function */
    public function register()
    {
        
        return view('admin.login.register');
    }

    /* Register Submit Function */
    public function registerSubmit(Request $request)
    {

        /* Laravel Validation */
        $request->validate(
        [
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:5'
        ],
        [
            'name.required'     =>'Name Field is required!',
            'email.required'    =>'Email Field is required!',
            'email.email'       =>'Email Should be a valid Email!',
            'email.unique'      =>'Email Must be unique!',
            'password.required' =>'Password required!',
            'password.min'      =>'Password Must be atleast 5 Character!',
        ]);



        /*$profile_imageName = time() . '.' . $request->profile_image->extension();
        $request->profile_image->move(public_path(Config::get('constants.ADMIN_PROFILE_IMAGE_UPLOAD_PATH')), $profile_imageName);*/
        

        /* Storing Data into Variable */
        $user['name']     = $request->name;
        $user['email']    = $request->email;
        $user['password'] = $request->password;

        /*Create user using Model Function */
        $result = $this->user->createUser($user);

        return redirect()->route('admin.login');

    }



    /* Admin user Logout Function */
    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            Session::flush();
            return redirect()->route('admin.login')->with(['success'=>'Successfully Logged out!']);
        }
        else{
            return redirect()->back();
        }
    }
}
