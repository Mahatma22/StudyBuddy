@extends('layout.main')
@section('tittle', 'Feedback Results')

@section('css')
<link rel="stylesheet" href="css/feedback.css">
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card m-5" style="font-family: 'Inter', sans-serif;">
                <div class="card-header bg-white font-weight-bold m-4" style="color: #000000; font-size: 32px">
                    Feedback Results
                </div>

                <div class="card-body mx-4" style="font-size: 16px">
                    <div class="row justify-content-center">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Telepon</th>
                                    <th scope="col">Masukan</th>
                                    <th scope="col">Rating</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach($feedbacks as $feedback)
                                    <tr>
                                        <td>{{ $feedback->nama_lengkap }}</td>
                                        <td>{{ $feedback->email }}</td>
                                        <td>{{ $feedback->telepon }}</td>
                                        <td>{{ $feedback->masukan }}</td>
                                        <td>{{ $feedback->rating }}</td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
