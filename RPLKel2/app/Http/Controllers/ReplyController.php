<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request, Thread $thread) {
        $request->validate([
            'content' => 'required|string'
        ]);
    
        $reply = new Reply([
            'content' => $request->content,
            'user_id' => 1,
            'thread_id' => $thread->id
        ]);
    
        $thread->replies()->save($reply);
    
        return back();
    }
}

