@extends('layoutAdmin.main')
@section('tittle', 'Dashboard')

@section('css')
<link rel="stylesheet" href="css/dashboardAdmin.css">
@endsection

@section('content')

<div class="ms-3">
    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <a href="{{ route('materials.create') }}">
                        <div class="mt-5">
                            <div class="card card-admin" id="Quiz" style="width: 100%; height: 15rem;">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="d-flex justify-content-center mt-3">
                                            <img src="{{ URL('img/add-file.png') }}" alt="" width="100px">
                                        </div>
                                        <h6 class="text-center card-subtitle mb-2 text-body-secondary mt-4">Input Subject</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <a href="{{ route('edit') }}">
                        <div class="mt-5">
                            <div class="card card-admin" id="Quiz" style="width: 100%; height: 15rem;">
                                <div class="card-body">
                                    <div class="card-title">
                                        <div class="d-flex justify-content-center mt-3">
                                            <img src="{{ URL('img/edit.png') }}" alt="" width="100px">
                                        </div>
                                        <h6 class="text-center card-subtitle mb-2 text-body-secondary mt-4">Edit Subject</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
        </div>
    </div>

@endsection