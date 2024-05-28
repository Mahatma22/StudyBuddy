<!DOCTYPE html>
<html>
<head>
    <title>Daftar Materi</title>
</head>
<body>
    <h1>Daftar Materi</h1>

    <ul>
        @foreach ($materials as $material)
            <li>
                {{ $material->name }}
                <a href="{{ route('materials.download', $material->id) }}">Download</a>
            </li>
        @endforeach
    </ul>
</body>
</html>
