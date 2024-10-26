@extends('layoutAdmin.main')
@section('tittle', 'Dashboard')

@section('css')
<link rel="stylesheet" href="css/dashboardAdmin.css">
@endsection

@section('content')
    <section>
    <div class="ms-3">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <a href="/quiz">
                        <div class="mt-5">
                            <div class="card card-admin" id="Quiz" style="width: 100%; height: 15rem;">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="d-flex justify-content-center mt-3">
                                            <img src="{{ URL('img/quiz.png') }}" alt="" width="100px">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('userPage') }}">
                        <div class="mt-5">
                            <div class="card card-admin" id="User" style="width: 100%; height: 15rem;">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="d-flex justify-content-center mt-3">
                                            <img src="{{ URL('img/user.png') }}" alt="" width="100px">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="mt-5">
                            <div class="card card-admin" id="FAQ" style="width: 100%; height: 15rem;">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="d-flex justify-content-center mt-3">
                                            <img src="{{ URL('img/faq.png') }}" alt="" width="100px">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('managecourse') }}">
                        <div class="mt-5">
                            <div class="card card-admin" id="Settings" style="width: 100%; height: 15rem;">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="d-flex justify-content-center mt-3">
                                            <img src="{{ URL('img/tempIcon.png') }}" alt="" width="100px">
                                        </div>
                                        <h6 class="text-center card-subtitle mb-2 text-body-secondary mt-4">Manage Course</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    </section>


    <section class="mx-auto">
        <div class="d-flex justify-content-center">
            <div id="courseProgressCard" class="card" style="margin-left: 28px;">
                <div class="card-header bg-white font-weight-bold">
                    Forum
                </div>
                <div class="card-body">
                    <div class="row subject">
                        <div class="col-sm-4 text-center font-weight-bold">
                            Course
                        </div>
                        <div class="col-sm-4 text-center font-weight-bold">
                            Subject
                        </div>
                        <div class="col-sm-4 text-center font-weight-bold">
                            Action
                        </div>
                    </div>

                    <div class="col-md-4">
                        <a href="{{ route('materials.create') }}">
                            <div class="mx-3 mt-5">
                                <div class="card card-admin" id="Quiz" style="width: 30rem; height: 15rem;">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="d-flex justify-content-center mt-3">
                                                <img src="{{ URL('img/education.png') }}" alt="" width="100px">
                                            </div>
                                            <h6 class="text-center card-subtitle mb-2 text-body-secondary mt-4">Add Subject</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="{{ route('feedback.result') }}">
                            <div class="mx-3 mt-5">
                                <div class="card card-admin" id="Quiz" style="width: 30rem; height: 15rem;">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="d-flex justify-content-center mt-3">
                                                <img src="{{ URL('img/chat.png') }}" alt="" width="100px">
                                            </div>
                                            <h6 class="text-center card-subtitle mb-2 text-body-secondary mt-4">Feedback</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4 text-center font-weight-bold">
                            <div class="d-flex justify-content-center">
                                <a href="#" class="btn btn-primary btn-sm">Attempt Quiz</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>

            <!--feedback-->
            <div id="quizCard" class="card ms-5" style="margin-right: 13px;">
                <div class="card-header bg-white font-weight-bold">
                    Feedback
                </div>
                <div class="card-body">
                    <div class="row subject">
                        <div class="col-sm-4 text-center font-weight-bold">Nama</div>
                        <div class="col-sm-4 text-center font-weight-bold">Email</div>
                        <div class="col-sm-4 text-center font-weight-bold">Rating</div>
                    </div>
                    <hr>
                    @foreach($feedbacks as $feedback)
                    <div class="row">
                        <div class="col-sm-4 text-center font-weight-normal">{{ $feedback->nama_lengkap }}</div>
                        <div class="col-sm-4 text-center font-weight-normal">{{ $feedback->email }}</div>
                        <div class="col-sm-4 text-center font-weight-normal">{{ $feedback->rating }}</div>
                    </div>
                    <hr>
                    @endforeach
                    <div class="d-flex justify-content-start">
                        <a href="{{ route('feedback.result') }}" class="btn btn-primary btn-sm">Lihat Selengkapnya</a>

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
