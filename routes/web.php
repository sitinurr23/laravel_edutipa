<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

// tambahkan route untuk kirim message
Route::post('/kirim-message', [HomeController::class, 'kirimMessage']);
