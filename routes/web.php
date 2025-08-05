<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/guru', [GuruController::class, 'index']);