<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboardAdmin ()
    {
        return view ('dashboard.dashboardAdmin',['Name' => session('loginAdmin')] );
    }

    public function dashboardUser ()
    {
        $userId=User::where('user_id',session('loginUser'))->first();        
        return view('dashboard.dashboardUser', ['Name' => $userId->Name]);
    }
}
