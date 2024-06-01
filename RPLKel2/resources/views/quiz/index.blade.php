@extends('layout.main')
@section('tittle', 'Quiz')

@section('css')
<link rel="stylesheet" href="{{ URL('css/quiz.css') }}">
@endsection

@section('content')

<div class="d-flex justify-content-center">
    <div class="card" id="form"style="width: 75rem;">
        <div class="card-header" style="background-color:#0d6efd">
            <h5 class="quiz-title">Quiz</h5>
            @foreach ($subject_name as $name)
            <h5 class="subject-title">{{$name['subject_name']}}</h5>
            @endforeach
        </div>
        <div class="card-body">
        </div>
        <div class="d-flex justify-content-center">
            <form action="/quizUser" method="post">
                @csrf
                @foreach($subjects as $keys => $subject)
                @php
                    $answers = json_decode($subject['answer'], true);
                @endphp
                <div class="mb-3">
                    <div class="card" style="width: 50rem">
                        <div class="card-body">
                            <div class="card-header" >
                            <h5>{{ $keys + 1 }}. {{ $subject['question'] }}</h5>
                            @if($subject['question_image'] != NULL)
                                <img src="{{ asset('storage/picture/photo-quiz/'.$subject['question_image']) }}" alt="Question Image" style="width: 50%;">
                            @endif
                            </div>
                            @foreach($answers as $key => $answer)
                            <div class="mb-3">
                                <div class="d-flex">
                                    <input type="radio" name="Benar[{{ $subject['id'] }}]" class="form-check-input my-auto" value="{{ $key }}" id="">
                                    <span class="my-auto">{{ $key }}. </span>
                                    <input type="hidden" name="Answer{{ $subject['id'] }}[{{ $key }}]" value="{{ $answer['label'] }}">
                                    <input type="text" class="form-control" id="answer{{ $key }}" name="Answer{{ $key }}" value="{{ $answer['label'] }}" disabled style="background-color: transparent; border:none">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <input type="hidden" name="user" value="{{session('loginUser')}}">
                    </div>
                </div>
                @endforeach
                <button class="btn btn-primary mb-3 btn-lg" type="submit"><strong>Submit</strong></button>
            </form>
        </div>
    </div>
</div>
@endsection
