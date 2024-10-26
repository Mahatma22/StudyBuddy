<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Masukan;
use App\Models\Subject; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

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
        $subject = Subject::paginate(2);
        return view('dashboard.dashboardUser', ['Name' => session('userName'), 'Subject' => $subject]);
    }
}
