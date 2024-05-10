@extends('layoutAdmin.main')
@section('tittle', 'Manage User')
@section('Name', session('loginAdmin'))

@section('css')
<link rel="stylesheet" href="css/userPage.css"> 
@endsection

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center" style="height: 95vh;">
            <div class="card" style="width:110rem; height: 53rem;">
                <div class="card-body">
                    <h5 class="card-title">StuddyBuddy's User</h5>
                    <div class="mx-4 mt-lg-5">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">User Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">School</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Action</th>   
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($userDatas as $number=>$userData)
                                <tr>
                                    <td>{{$number + 1}}</td>
                                    <td>{{$userData->user_id}}</td>
                                    <td>{{$userData->Name}}</td>
                                    <td>{{$userData->email}}</td>
                                    <td>{{$userData->School}}</td>
                                    <td>{{$userData->Phone}}</td>
                                    <td>
                                        <a href="{{ route('delete-user', ['id' => $userData->user_id]) }}" class="btn btn-danger">
                                            <img src="{{ URL('img/trash.png') }}" alt="" width="29px">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
