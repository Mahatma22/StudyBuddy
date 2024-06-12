@extends('layout.main')
@section('title', 'Forum')

@section('content')

<div class="container">
    <div class="forum-box bg-light p-4" style="background-color: #F0F0F0; margin-top: 100px;">
        <h1 class="mb-4">Create a New Thread</h1>
        <form method="POST" action="{{ URL('threads') }}" class="mt-3">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Write your title:</label>
                <input type="text" name="title" class="form-control" placeholder="Write your title..." required>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Write your content:</label>
                <textarea name="content" class="form-control" rows="6" placeholder="Write your content..." required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

@endsection
