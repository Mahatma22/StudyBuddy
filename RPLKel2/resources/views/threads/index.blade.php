@extends('layout.main')
@section('title', 'Forum')

@section('content')
<div class="container">
    <h1 class="mb-4" style="margin-top: 100px;">Forum Threads</h1>
    <a href="{{ route('inputThreads') }}" class="btn btn-primary mb-3">Add New Thread</a>

    @foreach ($threads as $thread)
    <div class="card mb-4 shadow-sm">
        <div class="card-body">
            <h5 class="card-title"><a href="{{ route('threads.show', $thread) }}" class="text-decoration-none text-dark">{{ $thread->title }}</a></h5>
            <p class="card-text">{{ \Illuminate\Support\Str::limit($thread->content, 100) }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="text-muted">Created by: {{ $thread->user->Name }}</div>
                <button onclick="confirmDelete('{{ $thread->id }}')" class="btn btn-sm btn-danger">Delete</button>
            </div>
        </div>
    </div>
    @endforeach
</div>

<script>
    function confirmDelete(threadId) {
        if (confirm("Apakah Anda yakin ingin menghapus thread ini?")) {
            window.location.href = "{{ route('replies.delete', ':threadId') }}".replace(':threadId', threadId);
        }
    }
</script>
@endsection
