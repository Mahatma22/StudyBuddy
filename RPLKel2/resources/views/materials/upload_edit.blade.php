@extends('layout.main')

@section('content')

<div class="container" style="background-color : #D9D9D9">
    <br>

    @if (session('success'))
    <script>
            document.addEventListener('DOMContentLoaded', function () {
                swal({
                    title: "Success!",
                    text: "{{ session('success') }}",
                    icon: "success",
                    button: "OK",
                });
            });
        </script>
    @endif

    @if ($errors->any())
        <div style="color: red;" id="liveAlertPlaceholder">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <h1 style="margin-left : 40px; margin-bottom: 20px; font-family : inter; font-weight : bold">Update Materi</h1>
    <form action="{{ route('update', $subjects->subject_id) }}" method="POST" enctype="multipart/form-data"
        style="margin-left : 40px; margin-bottom: 20px; font-family : inter; margin-right : 38px;">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="subject_name">Nama Subject:</label><br>
            <input type="text" name="subject_name" id="subject_name" class="form-control" value="{{$subjects->subject_name}}" required>
        </div>
        <div class="mb-3">
            <label for="video_link">Video Link:</label><br>
            <input type="url" name="video_link" id="video_link" class="form-control" value="{{$subjects->video_link}}" required>
        </div>
        <div class="mb-3">
            <label for="subject_overview">Subject Overview:</label><br>
            <textarea class="form-control" name="subject_overview" id="subject_overview" rows="3" value="{{$subjects->subject_overview}}" required></textarea>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Upload File (PDF):</label><br>
            <input class="form-control" type="file" name="file" id="file" accept=".pdf" required>
        </div>
        <div>
            <div>
                <label for="course_id">Course:</label><br>
                <select name="course_id" id="course_id" class="form-select" required>
                    <option selected>Choose Course...</option>
                    <option value="1">Matematika</option>
                    <option value="2">Fisika</option>
                    <option value="3">Biologi</option>
                    <option value="4">Kimia</option>
                    <option value="5">English</option>
                </select>
            </div>
            <br>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-success" type="submit" id="liveAlertBtn">Update</button>
            </div>
        </div>
    </form>
    <br>
</div>

</body>

@section('javascript')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

</html>

@endsection