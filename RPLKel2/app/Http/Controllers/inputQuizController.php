<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class inputQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('InputQuizAdmin.index',[
            "quizData"=>question::all(),
            "courseData"=>Course::all(),

    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('InputQuizAdmin.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validateData = $request->validate([
            "course"=>'required',
            "subject"=>'required',
            "question"=>'required',
            "AnswerA"=>'required',
            "AnswerB"=>'required',
            "AnswerC"=>'required',
            "AnswerD"=>'required',
            "Benar"=>'required',
            "imageQuestion"=>'mimes:png,jpg,jpeg|max:100000'
        ]);
    
        
        $photoQuiz = $validateData['imageQuestion'];
        $fileName = date("Y-m-d H:i").$photoQuiz->getClientOriginalname();
        $path = '/picture/photo-quiz/'.$fileName;


        Storage::disk('public')->put($path,file_get_contents($photoQuiz));

        $answers = [
            $validateData['AnswerA'],
            $validateData['AnswerB'],
            $validateData['AnswerC'],
            $validateData['AnswerD']
        ];
    
        if (count($answers) !== count(array_unique($answers))) {
            return back()->with("Fail","Jawaban yang Anda Inputkan Tidak Boleh Sama");
        }

        $answer = [            
            "A" => [
                "label" => $answers[0],
                "nilai" => false
            ],
            "B" =>[
                "label" => $answers[1],
                "nilai" => false
            ],
            "C" =>[
                "label" => $answers[2],
                "nilai" => false
            ],
            "D" =>[
                "label" => $answers[3],
                    "nilai" => false
            ]
        ];

        $answer[$validateData["Benar"]]["nilai"] = true;
            
        $answerConvert = [
            "answer" => $answer
        ];

        $inputDB = question::create([
            "question" => $validateData["question"],
            "answer" => json_encode($answerConvert["answer"]),
            "question_image" => $fileName,
            "subject_id" => $validateData["subject"],
            "course_id" => $validateData["course"]
        ]);

        if ($inputDB) {
            return back()->with("Success","Soal Berhasil Ditambahkan");
        } else {
            return back()->with("Fail","Soal Gagal Ditambahkan");
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(question $question)
    {
  
       

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, question $question)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(question $question)
    {
        //
    }
}
