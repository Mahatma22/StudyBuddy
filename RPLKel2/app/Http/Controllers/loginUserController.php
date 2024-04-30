<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginUserController extends Controller
{
    public function index(){
        
        return view('Auth.loginUser');
    }
    
}
