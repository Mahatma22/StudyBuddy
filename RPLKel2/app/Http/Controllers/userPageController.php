<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userPageController extends Controller
{
    public function show()
    {
        $userData = User::all();
        return view('userAdminPage.userPage', ["userDatas"=>$userData] );
    }

    public function delete($id){
        $deleteUser = User::where('user_id',$id);
        $deleteUser->delete();
        return back()->with('success', 'Data Telah Dihapus');
    }
}
