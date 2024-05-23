<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\question;
use Illuminate\Http\Request;

class dropdownController extends Controller
{
    public function getSubjects($course_id)
    {
        $subjects = Subject::where('course_id', $course_id)->get(['subject_id', 'subject_name']);
        return response()->json($subjects);
    }           

    public function showQuizPage($course_id)
    {
        $quizSubject = question::where('subject_id', $course_id)->first();
        return view('InputQuizAdmin.pageQuizEdit', compact('quizSubject'));
    }

}
