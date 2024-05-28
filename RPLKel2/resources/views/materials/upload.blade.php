<!DOCTYPE html>
<html>
<head>
    <title>Upload Materi</title>
</head>
<body>
    <h1>Upload Materi</h1>

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

    <form action="{{ route('materials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Nama Materi:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="file">Upload File (PDF):</label>
            <input type="file" name="file" id="file" accept=".pdf" required>
        </div>
        <button type="submit">Upload</button>
    </form>
</body>
</html>
