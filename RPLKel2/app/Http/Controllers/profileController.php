<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function showProfile()
    {
        $users = User::all();
        return view('userProfile.showProfile', compact('users'));
    }

    public function editProfile()
    {
        $users = User::all();
        return view('userProfile.editProfile', compact('users'));
    }

    public function updateProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'email' => 'required|email',
            'Phone' => 'required',
            'School' => 'required'
        ]);

        User::where('user_id', $id)->update($validatedData);

        return redirect()->route('userProfile.showProfile');
    }
}
