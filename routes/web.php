<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    UserController::class,
    'loginView'
])->name('login.page');

Route::get('dashboard', function () {
    return view('students.dashboard');
})->name('student.dashboard');
