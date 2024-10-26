<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table ='subject';
    protected $fillable = ['subject_name', 'course_id', 'video_link'];
    protected $primaryKey = 'subject_id';

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function subjects()
    {
        return $this->hasMany(Subject::class, 'course_id');
    }
}

