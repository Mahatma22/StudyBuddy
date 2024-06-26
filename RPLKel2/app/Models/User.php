<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $table = 'user';
    protected $fillable = ['email', 'password', 'Name', 'Phone', 'School'];
    protected $primaryKey="user_id";
}
