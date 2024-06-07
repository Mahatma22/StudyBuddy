<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masukan;

class feedbackController extends Controller
{
    public function showFeedback ()
    {
        return view('feedback.feedback');
    }

    public function submitFeedback(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:20',
            'masukan' => 'required|string|max:2000',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Simpan feedback ke database
        Masukan::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'masukan' => $request->masukan,
            'rating' => $request->rating,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('feedback.form')->with('success', 'Terima kasih atas masukan Anda!');
    }

    public function resultFeedback ()
    {
        return view('feedback.resultFeedback');
    }
}
