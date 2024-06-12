@extends('layoutAdmin.main')
@section('tittle', 'Dashboard')

@section('css')
<link rel="stylesheet" href="css/dashboardAdmin.css">
@endsection

@section('content')
    <section>
        <div class="ms-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <a href="/quiz">
                            <div class="mt-5">
                                <div class="card card-admin" id="Quiz" style="width: 30rem; height: 15rem;">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="d-flex justify-content-center mt-3">
                                                <img src="{{ URL('img/quiz.png') }}" alt="" width="100px">
                                            </div>
                                            <h6 class="text-center card-subtitle mb-2 text-body-secondary mt-4">Input Quiz</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>                

                    <div class="col-md-4">
                        <a href="{{ route('userPage') }}">
                            <div class="ms-3 mt-5">
                                <div class="card card-admin" id="Quiz" style="width: 30rem; height: 15rem;">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="d-flex justify-content-center mt-3">
                                                <img src="{{ URL('img/user.png') }}" alt="" width="100px">
                                            </div>
                                            <h6 class="text-center card-subtitle mb-2 text-body-secondary mt-4">User</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="{{ route('AdminFaq') }}">
                            <div class="mx-3 mt-5">
                                <div class="card card-admin" id="Quiz" style="width: 30rem; height: 15rem;">
                                    <div class="card-body">
                                        <div class="card-title">
                                            <div class="d-flex justify-content-center mt-3">
                                                <img src="{{ URL('img/faq.png') }}" alt="" width="100px">
                                            </div>
                                            <h6 class="text-center card-subtitle mb-2 text-body-secondary mt-4">Manage FAQ</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
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
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
