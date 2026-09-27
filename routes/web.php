<?php
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');