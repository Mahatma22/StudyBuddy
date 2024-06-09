<?php

namespace App\Http\Controllers;

use App\Models\Masukan;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboardAdmin ()
    {
        return view ('dashboard.dashboardAdmin',[
            'Name' => session('loginAdmin'),
            'feedbacks' => Masukan::latest()->take(5)->get()
            ] );
    }

    public function dashboardUser ()
    {
        return view('dashboard.dashboardUser', ['Name' => session('userName')]);
    }
}
