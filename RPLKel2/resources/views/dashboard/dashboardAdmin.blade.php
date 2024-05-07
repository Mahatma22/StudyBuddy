@extends('layoutAdmin.main')
@section('tittle', 'Dashboard')
@section('Name', $Name)

@section('css')
<link rel="stylesheet" href="css/dashboardAdmin.css"> 
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-center">
            <a href="#">
                <div class="mt-5">
                    <div class="card" style="width: 30rem; height: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's conte`nt.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="ms-3 mt-5">
                    <div class="card" style="width: 30rem; height: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's conte`nt.</p>
                        </div>
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="ms-3 mt-5">
                    <div class="card" style="width: 30rem; height: 15rem;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's conte`nt.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection