<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboardAdmin ()
    {
        return view ('dashboard.dashboardAdmin');
    }

    public function dashboardUser ()
    {
        return view('dashboard.dashboardUser');
    }
}