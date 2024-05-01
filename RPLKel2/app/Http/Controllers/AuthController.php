<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function viewLoginUser(){
        return view('Auth.loginUser');
    }

    public function viewRegisterUser(){
        return view('Auth.RegisterUser');
    }

    
    public function viewAdminUser(){
        return view('Auth.loginAdmin');
    }
    

    public function registerUser(Request $request){
        $validateData = $request->validate([
            'email'=>'required | unique:user',
            'password'=>'required|max:12|min:8',
            'Name' => 'required',
            'Age' => 'required|max:2',
            'School' => 'required'
        ]);
        
        $inputData = User::create([
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
            'Name' => $validateData['Name'],
            'Age' => $validateData['Age'],
            'School' => $validateData['School']
        ]);
        if($inputData){
            return redirect('/loginUser')->with("Success","Anda Telah Berhasil Registrasi, Silahkan Login");
        }
        else{
            return back()->with("Fail","Anda Gagal Registrasi");   
        }
    }

    public function loginUser (Request $request){
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
        $Auth= User::where("email","=",$request->email)->first();
        if($Auth){
            if(Hash::check($request->password,$Auth->password)){
                $request->session()->put("loginUser",$Auth->user_id);
                return redirect("/dashboardUser");
            }
            else{
                return back()->with("Fail","Email atau Password Salah");
            }
        }
        else{
            return back()->with("Fail","Email atau Password tidak terdaftar");   
        }
    }

    public function loginAdmin (Request $request)
    {
        $request->validate([
            "email" => "required",
            "password" => "required",
        ]);
        
        $email = "adminstuddybuddy@admin.com";
        $password = "adminStuddyBuddy";

        if($request->email == $email){
            if($request->password==$password){
                $request->session()->put("loginAdmin","Admin StuddyBuddy");
                return redirect("/dashboardAdmin");
            }
            else{
                return back()->with("Fail","Email atau Password Salah");
            }
        }
        else{
            return back()->with("Fail","Email atau Password tidak terdaftar");   
        }
    
    }

    public function logout(){
        if (Session::has("loginUser")){           
            Session::pull("loginUser");
        }
        else{
            Session::pull("loginAdmin");
        }
        return redirect("/");
    }
    
    
}
