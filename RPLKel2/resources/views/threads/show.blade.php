@extends('layout.main')
@section('title', 'Forum')

@section('content')
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">{{ $thread->title }}</h1>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $thread->content }}</p>
                </div>
            </div>

            <div class="mt-4">
                <h3>Replies</h3>
                @foreach ($thread->replies as $reply)
                <div class="card mb-3">
                    <div class="card-body">
                        <p class="card-text">{{ $reply->content }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="mt-4">
                <form method="POST" action="{{ route('replies.store', $thread) }}">
                    @csrf
                    <div class="form-group">
                        <textarea name="content" class="form-control" rows="4" placeholder="Write your reply here..." required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary mr-2">Reply</button>
                        <a href="{{ route('threads.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
