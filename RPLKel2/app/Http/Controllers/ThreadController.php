<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function index() {
        $threads = Thread::with('user')->get();
        return view('threads.index', compact('threads'));
    }

    public function create() {
        return view('threads.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);
    
        $thread = Thread::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => session('loginUser')
        ]);
    
        return redirect()->route('threads.index');
    }

    public function show(Thread $thread) {
        return view('threads.show', compact('thread'));
    }

    public function destroy(Thread $thread) {
        $thread->delete();
        return redirect()->route('threads.index');
    }
}

