@extends('layoutAdmin.main')
@section('tittle', 'Dashboard')

@section('css')
<link rel="stylesheet" href="css/inputQuiz.css"> 
@endsection

@section('content')

    <div class="container-fluid">
        <div class="d-flex justify-content-center align-items-center" style="height: 95vh;">
            <div class="card" style="width:95rem; height: 45rem;">
                <div class="card-body">
                    @if(session("Fail"))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Halo Admin</strong> {{session("Fail")}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="d-flex">
                        <div class="p-2 flex-grow-1">
                            @include('InputQuizAdmin.asset.addQuizModal') 
                        </div>
                        <div class="p-2 mt-4">                        
                            <select class="form-select me-2" id="courseTable" onchange="getDataForTable(this.value)" >
                                <option selected>Pilih Mata Pelajaran</option>
                                @foreach($courseData as $courseDatas)
                                <option value="{{$courseDatas->course_id}}">{{$courseDatas->course_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mx-4 mt-lg-5">
                        <div class="text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Subject ID</th>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Action</th>   
                                    </tr>
                                </thead>
                                <tbody>
    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('javascript')

    <script src="{{ URL('js/inputQuiz.js') }}"></script>

    @endsection
@endsection