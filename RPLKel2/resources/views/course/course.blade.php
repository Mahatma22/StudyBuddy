@extends('layout.main')

@section('content')

<div class="container-xxl" style="background-color : #D9D9D9">
<br>
<h1 style="margin-left : 40px; margin-bottom: 20px; font-family : inter; font-weight : bold">Mathematics</h1>
<img src="img/math image.png" alt="" style= "margin-left : 40px; margin-bottom: 20px" width= "640" height= "421";>
<p style="font-family: Inter; font: size 24px; margin-left: 40px; text-align:justify; font-weight : bold">Materi Pembelajaran</p>
<p style="font-family: Inter; font: size 24px; margin-left: 40px; text-align:justify;"><li>
    <ol><a href="{{route("coursepage", "fungsi")}}" style="text-decoration: underline; color: black;">1. Fungsi</a></ol>
    <ol><a href="{{route("coursepage", "gbd")}}" style="text-decoration: underline; color: black;">2. Geometri Bidang Datar</a></ol>
    <ol><a href="{{route("coursepage", "gbr")}}" style="text-decoration: underline; color: black;">3. Geometri Bidang Ruang</a></ol>
    <ol><a href="{{route("coursepage", "stat")}}" style="text-decoration: underline; color: black;">4. Pengantar Statistika</a></ol>
    <ol><a href="{{route("coursepage", "data")}}" style="text-decoration: underline; color: black;">5. Data Tunggal dan Data Berkelompok</a></ol>
</li></p>

</div>

@endsection