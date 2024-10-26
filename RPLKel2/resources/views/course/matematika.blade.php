@extends('layout.main')

@foreach ($course as $c)
@section("title", $c['course_name'])
@endforeach

@section("content")

<div class="container">
  @foreach ($subject as $key => $konten)

  <div class="card" style="width: 75rem; margin-top: 25px;">
  <div class="card-body">
    <h3 class="card-title">BAB {{$key + 1}} : {{$konten['subject_name']}}</h3>
    <h6><iframe width="1164.4" height="600" src="https://www.youtube.com/embed/{{$konten['video_link']}}" frameborder="0"></iframe></h6>
    <p class="card-text" style="text-align: justify;">{{$konten['subject_overview']}}</p>
    <h6><a href="{{ route('materials.download', $konten['subject_id']) }}" style="color: black; text-decoration: underline;">Download Full Materi Disini</a></h6>
    <h6><a href="{{ route('doQuizUser', $konten['subject_id']) }}" style="color: black; text-decoration: underline;">Kerjakan Quiz</a></h6>
  </div>
</div>
    
  @endforeach
</div>

@endsection