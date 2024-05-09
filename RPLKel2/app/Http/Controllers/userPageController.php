<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userPageController extends Controller
{
    public function show()
    {
        $userData = User::all();
        return view('userAdminPage.userPage', ["Name"=> session('loginAdmin'), "userData"=>$userData] );
    }
}
