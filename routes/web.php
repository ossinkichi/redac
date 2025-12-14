<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::get('/', [loginController::class, 'index'])->name('login.page');
Route::post('/login', [loginController::class, 'authenticate'])->name('login.auth');
Route::get('/home', function () {
    return view('home');
});
