<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    UserController::class,
    'loginView'
])->name('login.page');
Route::post('/login', [
    loginController::class,
    'authenticate'
])->name('login.auth');

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', [
    UserController::class,
    'registerView'
])->name('register.page');
Route::post('/register', [
    UserController::class,
    'AuthenticateRegister'
])->name('register.auth');
