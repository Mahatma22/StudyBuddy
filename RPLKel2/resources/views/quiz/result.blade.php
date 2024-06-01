@extends('layoutAdmin.main')
@section('tittle', 'Quiz Result')

@section('content')

<div class="d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header" style="background-color:#0d6efd">
        </div>
        <div class="card-body">
            <h5 class="card-title">Quiz Result</h5>
            <p>Total Questions: {{ $totalQuestions }}</p>
            <p>Correct Answers: {{ $correctCount }}</p>
            <div class="text-center">
                <h1 class="fw-bold" >Your Score</h1>
                <p class="fw-semibold fs-3">{{ $score }}/100</p>
            </div>
            <a href="/dashboardUser" class="btn btn-primary">Back to Dashboard</a>
        </div>
    </div>
</div>

@endsection
