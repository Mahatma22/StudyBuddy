<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use Illuminate\Support\Facades\Storage;

class MaterialController extends Controller
{
    public function create()
    {
        return view('materials.upload');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'file' => 'required|mimes:pdf|max:2048',
        ]);

        // Upload file
        if ($request->file('file')) {
            $filePath = $request->file('file')->store('materials', 'public');
            
            // Simpan informasi file ke database
            $material = new Material();
            $material->name = $request->name;
            $material->file_path = $filePath;
            $material->save();
            
            return back()->with('success', 'File berhasil di-upload');
        }

        return back()->withErrors('Gagal meng-upload file');
    }

    public function download($id)
    {
        $material = Material::findOrFail($id);
        
        // Cek apakah file ada di storage
        if (Storage::disk('public')->exists($material->file_path)) {
            return Storage::disk('public')->download($material->file_path);
        }

        return redirect()->back()->withErrors('File tidak ditemukan');
    }

    public function index()
    {
        $materials = Material::all();
        return view('materials.index', compact('materials'));
    }
}
