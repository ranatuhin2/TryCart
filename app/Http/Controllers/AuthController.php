<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /* Auth Controller Login Function */



    /* Admin Login View Page Function */
    public function login()
    {
        return view('Admin.login.login');
    }

    /* Admin Login Post Login  Function */
    public function loginSubmit(Request $request)
    {
        show($_POST);

    }
}
