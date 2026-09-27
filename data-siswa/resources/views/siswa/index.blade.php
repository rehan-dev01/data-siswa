<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    @if (Session('sukses'))
    <p style="color: green;">{{ session('sukses') }}</p>
    @endif
    <a href="{{ route('siswa.create') }}">+ Tambah Siswa</a>

    <table border="1" cellpadding="8" style="border-collapse: collapse; margin-top: 12px;">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
        @forelse ($daftarSiswa as $siswa)
        <tr>
            <td>{{ $siswa['nim'] }}</td>
            <td>{{ $siswa['nama'] }}</td>
            <td>{{ $siswa['kelas'] }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="3">Belum ada data siswa.</td>
        </tr>
        @endforelse
    </table>
</body>
</html>