<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reply;

class Thread extends Model
{
    protected $fillable = ['title', 'content', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function replies() {
        return $this->hasMany(Reply::class);
    }
}
