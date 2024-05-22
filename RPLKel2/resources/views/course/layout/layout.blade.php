@extends('layout.main')

@section('content')

<div class="container-xxl" style="background-color : #D9D9D9">
<br>
  <h1 style="margin-left : 40px; margin-bottom: 20px; font-family : inter; font-weight : bold">@yield("Title")</h1>
    @yield('image')
  <p style="font-family: Inter; font: size 24px; margin-left: 40px; text-align:justify; text-decoration: underline; font-weight : bold"><a href="@yield('Link Video')" style="color: black;">Lihat Video Pembelajaran Disini</a></p>
  <p style="font-family: Inter; font: size 24px; margin-left: 40px; text-align:justify; margin-right: 40px;">@yield("Konten")</p>
    <p style="font-family: Inter; font: size 24px; margin-left: 40px; text-align:justify; text-decoration: underline; font-weight : bold">@yield('Link Materi')</p>
    <br>


  </div>



@endsection