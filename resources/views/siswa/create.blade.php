<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <a href="{{ route('siswa.index') }}">&larr; kembali ke Daftar</a>

    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <label>NIM:</label><br>
        <input type="text" name="nim" value="{{ old('nim') }}"><br><br>

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}"><br><br>

        <label>Kelas:</label><br>
        <input type="text" name="kelas" value="{{ old('kelas') }}"><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>