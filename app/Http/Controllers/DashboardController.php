<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /* Admin Panel Dashboard View Function */
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    /* Users Module */
    public function usersModule()
    {
        echo "User Module is in Progress!";
        exit;
    }
}
