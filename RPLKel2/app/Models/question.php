<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Subject;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class question extends Model
{
    use HasFactory;
    protected $table = 'question';
    protected $fillable = ['question', 'answer', 'question_image', 'course_id', 'subject_id'];

    public function course(){
        return $this->belongTo(Course::class);
    }

    public function subject(){
        return $this->belongTo(Subject::class);
    }
}
