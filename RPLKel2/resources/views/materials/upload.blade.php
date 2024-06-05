<!DOCTYPE html>
<html>
<head>
    <title>Upload Subject</title>
</head>
<body>
    <h1>Upload Subject</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="subject_name">Nama Subject:</label>
            <input type="text" name="subject_name" id="subject_name" required>
        </div>
        <div>
            <label for="video_link">Video Link:</label>
            <input type="url" name="video_link" id="video_link" required>
        </div>
        <div>
            <label for="subject_overview">Subject Overview:</label>
            <textarea name="subject_overview" id="subject_overview" required></textarea>
        </div>
        <div>
            <label for="file">Upload File (PDF):</label>
            <input type="file" name="file" id="file" accept=".pdf" required>
        </div>
        <div>
            <label for="course_id">Course ID:</label>
            <input type="number" name="course_id" id="course_id" required>
        </div>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
