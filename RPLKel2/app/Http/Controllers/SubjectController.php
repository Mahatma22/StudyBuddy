<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use Illuminate\Support\Facades\Storage;

class SubjectController extends Controller
{
    public function create()
    {
        return view('materials.upload');
    }

    public function store(Request $request)
    {

    // Validasi input
    $request->validate([
        'subject_name' => 'required|string|max:255',
        'video_link' => 'required|url',
        'subject_overview' => 'required|string',
        'file' => 'required|mimes:pdf|max:2048',
        'course_id' => 'required|numeric|',
    ]);

    // Upload file
    if ($request->file('file')) {
        $filePath = $request->file('file')->store('subjects', 'public');
        
        // Simpan informasi subject ke database
        $subject = new Subject();
        $subject->subject_name = $request->subject_name;
        $subject->video_link = $request->video_link;
        $subject->subject_overview = $request->subject_overview;
        $subject->subject_download = $filePath;
        $subject->course_id = $request->course_id;
        $subject->save();
        
        return back()->with('success', 'Subject berhasil di-upload');
    }

    return back()->withErrors('Gagal meng-upload subject');
}


    public function download($id)
    {
        $material = Subject::findOrFail($id);
        
        // Cek apakah file ada di storage
        if (Storage::disk('public')->exists($material->file_path)) {
            return Storage::disk('public')->download($material->file_path);
        }

        return redirect()->back()->withErrors('File tidak ditemukan');
    }

    public function index()
    {
        $materials = Subject::all();
        return view('materials.index', compact('materials'));
    }
}
