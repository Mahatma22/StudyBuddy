<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class dropdownController extends Controller
{
    public function getSubjects($course_id)
    {
        $subjects = Subject::where('course_id', $course_id)->get(['subject_id', 'subject_name']);
        return response()->json($subjects);
    }   
    
    public function allDataSubject()
    {
        return response()->json(Subject::all(), 200);
    }

    public function showQuizPage($course_id)
    {
        $quizSubject = question::where('subject_id', $course_id)->get();
        return view('InputQuizAdmin.pageQuizEdit', compact('quizSubject'));
    }

    public function updateQuiz(Request $request , $question_id)
    {
        $validateData = $request->validate([
            "course" => 'required',
            "subject" => 'required',
            "question" => 'required',
            "AnswerA" => 'required',
            "AnswerB" => 'required',
            "AnswerC" => 'required',
            "AnswerD" => 'required',
            "Benar" => 'required',
            "imageQuestion" => 'mimes:png,jpg,jpeg|max:2048'
        ]);
    
        $answers = [
            $validateData['AnswerA'],
            $validateData['AnswerB'],
            $validateData['AnswerC'],
            $validateData['AnswerD']
        ];
    
        if (count($answers) !== count(array_unique($answers))) {
            return back()->with("Fail", "Jawaban yang Anda Inputkan Tidak Boleh Sama");
        }
    
        $answer = [
            "A" => [
                "label" => $answers[0],
                "nilai" => false
            ],
            "B" => [
                "label" => $answers[1],
                "nilai" => false
            ],
            "C" => [
                "label" => $answers[2],
                "nilai" => false
            ],
            "D" => [
                "label" => $answers[3],
                "nilai" => false
            ]
        ];
    
        $answer[$validateData["Benar"]]["nilai"] = true;
    
        $answerConvert = [
            "answer" => $answer
        ];
    
        $question = question::findOrFail($question_id);
    
        if ($request->hasFile('imageQuestion')) {

            if ($question->question_image) {
                Storage::disk('public')->delete('/picture/photo-quiz/' . $question->question_image);
            }
    

            $photoQuiz = $request->file('imageQuestion');
            $fileName = date("Y-m-d H:i") . $photoQuiz->getClientOriginalName();
            $path = '/picture/photo-quiz/' . $fileName;
    
            Storage::disk('public')->put($path, file_get_contents($photoQuiz));
            $question->question_image = $fileName;
        }
    
        $question->question = $validateData["question"];
        $question->answer = json_encode($answerConvert["answer"]);
        $question->subject_id = $validateData["subject"];
        $question->course_id = $validateData["course"];
    
        if ($question->save()) {
            return back()->with("Success", "Soal Berhasil Diubah");
        } else {
            return back()->with("Fail", "Soal Gagal Diubah");
        }
        
    }
    public function delete($question_id){
        $deleteQuestion = question::where('id',$question_id);
        $deleteQuestion->delete();
        return back()->with('Success', 'Data Telah Dihapus');

    }

}
