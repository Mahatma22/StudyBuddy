@extends('layoutAdmin.main')
@section('tittle', 'Dashboard')

@section('css')
<link rel="stylesheet" href="css/inputQuiz.css">
<style>
</style>
@endsection

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-center align-items-center" style="height: 95vh;">
        <div class="card" style="width:95rem; height: 45rem;">
            <div class="card-body">
                <div class="mt-2 ms-3">
                    <a href="/quiz" class="btn btn-primary ">Back</a>
                </div>
                <div class="mx-5 mt-4">
                    <div class="text-center">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Question Id</th>
                                    <th scope="col">Question</th>
                                    <th scope="col">Answer</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($quizSubject as $key => $quiz)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $quiz['id'] }}</td>
                                        <td>{{ $quiz['question'] }}</td>
                                        <td>
                                        @include('InputQuizAdmin.asset.seeAnswerModal') 
                                        </td>
                                        <td >
                                            @include('InputQuizAdmin.asset.updateQuestionModal') 
                                            <a href="/deleteQuestion/{{$quiz['question_id']}}" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
