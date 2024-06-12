<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class profileController extends Controller
{
    public function showProfile()
    {
        $session = session('loginUser');
        $users = User::where('user_id', $session)->get();
        return view('userProfile.showProfile', compact('users'));
    }

    public function editProfile()
    {
        $session = session('loginUser');
        $users = User::where('user_id', $session)->get();
        return view('userProfile.editProfile', compact('users'));
    }

    public function updateProfile(Request $request, $id)
    {
        $validatedData = $request->validate([
            'Name' => 'required',
            'email' => 'required|email',
            'Phone' => 'required',
            'School' => 'required',
            'ProfilePicture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->file('ProfilePicture')){
            $validatedData['ProfilePicture'] = $request->file('ProfilePicture')->store('profile-picture');
        }

        User::where('user_id', $id)->update($validatedData);

        return redirect()->route('userProfile.showProfile');
    }
}
