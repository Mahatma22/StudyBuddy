@extends('layout.main')
@section('title', 'Settings')

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
                <form action="{{ route('userProfile.updateProfile', ['id' => session('loginUser')]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" name="Name" value="{{ $user->Name }}" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" name="Phone" value="{{ $user->Phone }}" required>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">School</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <input type="text" class="form-control" name="School" value="{{ $user->School }}" required>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group mb-3">
                            <h6 class="mb-0">Profile Picture</h6>
                            <br>
                            <div class="upload-container">
                                <div class="border-container">
                                    <div class="icons fa-4x">
                                        <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                        <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
                                        <i class="fas fa-file-pdf" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                                    </div>
                                    <input type="file" class="form-control" name="ProfilePicture" id="ProfilePicture" accept="image/*" placeholder=""
                                        aria-describedby="fileHelpId">
                                    <p>Drag and drop files here, or browse from computer
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a class="btn btn-danger" href="{{ route('userProfile.showProfile') }}">Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
@endforeach
@endif
</div>

@endsection
