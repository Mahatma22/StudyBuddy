@extends('layout.main')
@section('tittle', 'Settings')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}"> 
@endsection

@section('content')

<div class="container">
@if (count($users) > 0)
@foreach ($users as $user)
    <div class="main-body">
        <div class="row gutters-sm">
            <!-- Sidebar -->
            <div class="col-lg-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            @if($user->ProfilePicture && file_exists(public_path('storage/' . $user->ProfilePicture)))
                                <img src="{{ asset('storage/'.$user->ProfilePicture) }}" alt="User" class="rounded-circle" width="150" height="150">
                            @else
                                <img src="{{ URL('img/userPhoto.png') }}" alt="Default User Photo" class="rounded-circle" width="150" height="150">
                            @endif
                            <div class="mt-3">
                                <h4>{{ $user->Name }}</h4>
                                <p class="text-secondary mb-1">Student</p>
                                <p class="text-muted font-size-sm">Joined at {{ $user->created_at }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->

            <!-- Mainbar -->
            <div class="col-lg-8">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->Name }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->Phone}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">School</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                {{ $user->School }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-warning" href="{{ route('userProfile.editProfile') }}">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endif
</div>

@endsection
