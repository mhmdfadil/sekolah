<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\MasukController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MPController;
use App\Http\Controllers\KelasController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [MasukController::class, 'index'])->name('login');
Route::get('dashboard', [MasukController::class, 'dashboard'])->name('dashboard');
Route::get('logout', [MasukController::class, 'logout'])->name('logout');
Route::post('login', [MasukController::class, 'login']);
Route::get('siswa', [SiswaController::class, 'index'])->name('siswa');
Route::post('siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
Route::get('guru', [GuruController::class, 'index'])->name('guru');
Route::post('guru', [GuruController::class, 'store'])->name('guru.store');
Route::delete('/guru/{id}', [GuruController::class, 'destroy'])->name('guru.destroy');
Route::get('mp', [MPController::class, 'index'])->name('mp');
Route::post('mp', [MPController::class, 'store'])->name('mp.store');
Route::delete('/mp/{id}', [MPController::class, 'destroy'])->name('mp.destroy');
Route::get('kelas', [KelasController::class, 'index'])->name('kelas');
Route::post('kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');