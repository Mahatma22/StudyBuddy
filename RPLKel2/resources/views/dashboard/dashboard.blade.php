@extends('layout.main')
@section('tittle', 'Dashboard')

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
                <hr>
                <div class="row">
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Mathematics
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Integral
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
                <div class="row">
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Mathematics
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Integral
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

                <div class="row">
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Mathematics
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Integral
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

                <div class="row">
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Mathematics
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Integral
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
                <div class="row">
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Mathematics
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center font-weight-bold">
                        <div class="row text-center font-weight-normal">
                            <div class="col">
                                Integral
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
    </div>
</div>

<!-- Zaim -->

@endsection
