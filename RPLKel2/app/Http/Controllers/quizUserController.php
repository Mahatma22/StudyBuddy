<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\question;
use Illuminate\Http\Request;

class quizUserController extends Controller
{
    public function show($subject_id)
    {
        $subjects= question::where('subject_id',$subject_id)->get();
        $subjectName = Subject::where('subject_id', $subject_id)->get('subject_name');
        return view('quiz.index', ["subjects"=>$subjects, "subject_name"=>$subjectName]);
    }

    public function compare(Request $request)
    {
        {
            $validateData = $request->validate([
                'Benar' => 'required|array'
            ]);
            
            $userAnswers = $request->input('Benar');
            $results = [];
            $correctCount = 0;
            
            foreach ($userAnswers as $subjectId => $selectedAnswer) {
                $question = question::find($subjectId);
                $answers = json_decode($question->answer, true);
                
                if ($answers[$selectedAnswer]['nilai'] == true) {
                    $results[$subjectId] = 'correct';
                    $correctCount++;
                } else {
                    $results[$subjectId] = 'incorrect';
                }
            }
            $score = floor(($correctCount/count($userAnswers))*100);
    
            return view('quiz.result', [
            'results' => $results, 
            'correctCount' => $correctCount, 
            'totalQuestions' => count($userAnswers),
            'score' => $score
            ]);
        }
    }
}
