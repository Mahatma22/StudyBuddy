
@extends('layout.main')
@section('title', 'Dashboard')
@section('Name', $Name)

@section('css')
<link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('content')

<div class="d-flex justify content center">
    <!-- Farabi -->
    <div class="col-md-6 pr">
        <div id="courseProgressCard" class="card">
            <div class="card-header bg-white font-weight-bold">
                Course Progress
            </div>
            <div class="card-body">
                <table class="table progressCourse">
                    <tbody >
                        <tr>
                            <th scope="col">1</th>
                            <td>Mathematics</td>
                            <td>
                                <div class="progress" style="height: 10px; margin-top:7px ; ">
                                    <div class="progress-bar" role="progressbar" style="width: 80%; " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <div class="progressValue">
                                    80%
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">2</th>
                            <td>Physics</td>
                            <td>
                                <div class="progress" style="height: 10px; margin-top:7px ;">
                                    <div class="progress-bar" role="progressbar" style="width: 45%; " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <div class="progressValue">
                                    45%
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">3</th>
                            <td>Biology</td>
                            <td>
                                <div class="progress" style="height: 10px; margin-top:7px ;">
                                    <div class="progress-bar" role="progressbar" style="width: 10%; " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <div class="progressValue">
                                    10%
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">4</th>
                            <td>Chemistry</td>
                            <td>
                                <div class="progress" style="height: 10px; margin-top:7px ;">
                                    <div class="progress-bar" role="progressbar" style="width: 87%; " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <div class="progressValue">
                                    87%
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="col">5</th>
                            <td>English</td>
                            <td>
                                <div class="progress" style="height: 10px; margin-top:7px ;">
                                    <div class="progress-bar" role="progressbar" style="width: 17%; " aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </td>
                            <td>
                                <div class="progressValue">
                                    17%
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- apip -->
    <div class="col-md-6">
        <div id="quizCard" class="card">
            <div class="card-header bg-white font-weight-bold">
                Quizezz
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Course</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($Subject as $key=>$s)
                        <tr>
                        <th scope="row">{{$key +1 }}</th>
                        <td>{{ $s->course->course_name }}</td>
                        <td>{{ $s['subject_name'] }}</td>
                        <td>
                            <a href="{{ route('doQuizUser' , $s['subject_id']) }}" class="btn btn-primary">Attempt</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $Subject->links('pagination::bootstrap-4') }}            </div>
        </div>
    </div>
</div>
    <!-- Zaim -->
    <div id="courseOverviewCard" class="card">
        <div class="card-header bg-white font-weight-bold">
                Course Overview
        </div>

        <div id="card-body">
            <div id="carouselExampleControls" class="carousel slide" data-bs-interval="false">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                    <img src="{{ URL('img/math image.png') }}" class="card-img-top" alt="Image for Card 1">
                                        <div class="card-body">
                                            <h5 class="card-title">Mathematics</h5>
                                            <a href="{{route('coursepage', "1")}}" class="btn btn-primary">Go to Course</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                    <img src="{{ URL('img/physics image.png') }}" class="card-img-top" alt="Image for Card 2">
                                        <div class="card-body">
                                            <h5 class="card-title">Physics</h5>
                                            <a href="{{route('coursepage', "2")}} " class="btn btn-primary">Go to Course</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                    <img src="{{ URL('img/biology image.png') }}" class="card-img-top" alt="Image for Card 3">
                                        <div class="card-body">
                                            <h5 class="card-title">Biology</h5>
                                            <a href="{{route('coursepage', "3")}} " class="btn btn-primary">Go to Course</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="card">
                                    <img src="{{ URL('img/chemistry image.png') }}" class="card-img-top" alt="Image for Card 4">
                                        <div class="card-body">
                                            <h5 class="card-title">Chemistry</h5>
                                            <a href="{{route('coursepage', "4")}} " class="btn btn-primary">Go to Course</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                    <img src="{{ URL('img/course image.jpg') }}" class="card-img-top" alt="Image for Card 5">
                                        <div class="card-body">
                                            <h5 class="card-title">English</h5>
                                            <a href="{{route('coursepage', "5")}} " class="btn btn-primary">Go to Course</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev bg-black" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="width: 25px;height: 25px; border-radius:100%; margin-top:130px; left: 3px">
                    <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-left:0px"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next bg-black" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="width: 25px;height: 25px; border-radius:100%; margin-top:130px; right: 3px">
                    <span class="carousel-control-next-icon" aria-hidden="true" style="margin-left:0px"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <hr>
    </div>
@endsection
