<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Models\Guru;    

Route::get('/', function () {
    return view('welcome');
});


Route::get('/guru', [GuruController::class, 'index']);

Route::resource('/guru', GuruController::class);

// Route::get('/guru/create', [GuruController::class, 'create'])->name('membuat');

// Route::post('/guru/store', [GuruController::class, 'store'])->name('simpan');