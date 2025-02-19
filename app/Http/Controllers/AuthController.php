<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /* Auth Controller Login Function */



    public function login()
    {
        return view('Admin.login.login');
    }
}
