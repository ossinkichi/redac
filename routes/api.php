<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureIsSecretary;
use App\Http\Middleware\EnsureIsTeacher;


Route::post('/login', [
    UserController::class,
    '@authenticateLogin'
])->name('login.auth');

// Secretary Routes Access
Route::middleware(['auth', EnsureIsSecretary::class])->group(function () {
    // Teacher Routes
    Route::get('/teachers', [TeacherController::class, 'findAll'])->name('teachers.all');
    Route::get('/teacher/{cpf}', [TeacherController::class, 'find'])->name('teacher.find');
    Route::post('/teacher/create', [TeacherController::class, 'newTeacher'])->name('teacher.create');
    Route::put('/teacher/update', [TeacherController::class, 'update'])->name('teacher.update');
    Route::patch('/teacher/desactive', [TeacherController::class, 'desactive'])->name('teacher.active');
    Route::patch('/teacher/active', [TeacherController::class, 'active'])->name('teacher.active');
});

// Teacher Routes Access
Route::middleware(['auth', EnsureIsTeacher::class])->group(function () {
    Route::get('/teacher/{cpf}', [TeacherController::class, 'find'])->name('teacher.find');
    Route::put('/teacher/simpleupdate', [TeacherController::class, 'simpleUpdate'])->name('teacher.simple-update');
});
