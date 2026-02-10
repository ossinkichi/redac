<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    UserController::class,
    'loginView'
])->name('login.page');

Route::post('/auth', [
    UserController::class,
    'authenticateLogin'
])->name('login.auth');


Route::get('student/dashboard', function () {
    return view('students.dashboard');
})->name('student.dashboard');

Route::get('teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard');

Route::get('secretary/dashboard', function () {
    return view('secretary.secretary.dashboard');
})->name('secretary.dashboard');
