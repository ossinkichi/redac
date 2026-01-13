<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureIsSecretary;

// User Routes
Route::post('/login', [
    UserController::class,
    '@authenticateLogin'
])->name('login.auth');

Route::post('/user/register', [
    UserController::class,
    '@register'
])->name('register.auth');
// Student Routes
Route::get('/student/{student}', [StudentController::class, 'findStudent'])->name('student.find');

Route::post('student/create')->name('student.register')->middleware([EnsureIsSecretary::class]);
