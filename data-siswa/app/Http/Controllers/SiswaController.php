<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    private array $dataAwal = [
        ['nim' => '2024001', 'nama'=> 'ahmad fauzi', 'kelas'=> 'XI RPL 1'],
        ['nim' => '2024002', 'nama'=> 'siti', 'kelas'=> 'XI RPL 2'],
        ['nim' => '2024003', 'nama'=> 'budi', 'kelas' => 'XI RPL 1'],
    ];
    public function index()
    {
        $daftarSiswa = session('daftar_siwa', $this->dataAwal);
        return view('siswa.index', [
            'daftarSiswa' => $daftarSiswa,]);
    }
    
    public function create()
    {
        return view('siswa.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|string|max:20',
            'nama' => 'required|string|max:100',
            'kelas' => 'required|string|max:20',
        ]);
        $daftarSiswa = session('daftar_siswa', $this->dataAwal);
        $daftarSiswa[] = $validated;
        session(['daftar_siswa' => $daftarSiswa]);

        return redirect()
        ->route('siswa.index')
        ->with('sukses', 'Data siswa berhasil ditambahkan!');
    }
}
