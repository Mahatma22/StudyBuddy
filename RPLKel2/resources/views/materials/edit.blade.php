@extends('layoutAdmin.main')
@section('tittle', 'Manage Subject')
@section('Name', session('loginAdmin'))

@section('css')
<link rel="stylesheet" href="css/userPage.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-center align-items-center" style="height: 95vh;">
        <div class="card" style="width: 80rem; height: auto;">
            <div class="card-body">
                <h5 class="card-title text-center">StuddyBuddy's Subjects</h5>
                <div class="table-responsive mt-4" style="height: 65vh; overflow-y: auto;">
                    <table class="table table-bordered table-hover align-middle" style="table-layout: fixed; width: 100%;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" class="text-center" style="width: 10%;">Subject ID</th>
                                <th scope="col" class="text-center" style="width: 10%;">Subject Name</th>
                                <th scope="col" class="text-center" style="width: 15%;">Video Link</th>
                                <th scope="col" class="text-center" style="width: 40%;">Subject Overview</th>
                                <th scope="col" class="text-center" style="width: 10%;">Course ID</th>
                                <th scope="col" class="text-center" style="width: 10%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($subject as $subjects)
                            <tr>
                                <td class="text-center">{{ $subjects->subject_id }}</td>
                                <td class="text-center">{{ $subjects->subject_name }}</td>
                                <td class="text-center">{{ $subjects->video_link }}</td>
                                <td class="text-center" style="word-wrap: break-word;">{{ $subjects->subject_overview }}</td>
                                <td class="text-center">{{ $subjects->course_id }}</td>
                                <td class="text-center">
                                    <a href="{{ route('upload_edit', ['id' => $subjects->subject_id]) }}" class="btn btn-info">
                                        <img src="{{ URL('img/edit.png') }}" alt="Edit" width="24px">
                                    </a>
                                    <a href="{{ route('delete-subject', ['id' => $subjects->subject_id]) }}" class="btn btn-danger delete-button">
                                        <img src="{{ URL('img/trash.png') }}" alt="Delete" width="24px">
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
@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteLinks = document.querySelectorAll('.delete-button');

        deleteLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault(); // Mencegah default action
                const url = this.getAttribute('href'); // Ambil URL dari tombol

                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this subject!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    cancelButtonText: "No, cancel!",
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function (isConfirm) {
                    if (isConfirm) {
                        // Jika dikonfirmasi, redirect ke URL hapus
                        window.location.href = url;
                    } else {
                        swal("Cancelled", "Your subject is safe :)", "error");
                    }
                });
            });
        });
    });
</script>
@endsection


@endsection
