<?php

use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.main');
});
Route::resource('guru', GuruController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('kelas', KelasController::class);