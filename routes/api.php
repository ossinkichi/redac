<?php

use App\Http\Controllers\SecretaryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureIsAdmin;
use App\Http\Middleware\EnsureIsSecretary;
use App\Http\Middleware\EnsureIsStudent;
use App\Http\Middleware\EnsureIsTeacher;


Route::post('/login', [
    UserController::class,
    '@authenticateLogin'
])->name('login.auth');

// Secretary Routes Access
Route::middleware(['auth', EnsureIsSecretary::class, EnsureIsAdmin::class])->group(function () {

    // Secretary Routes
    Route::get('/secretary/{cpf}', [SecretaryController::class, 'find'])->name('secretary.find');
    Route::put('/secretary/update', [SecretaryController::class, 'update'])->name('secretary.update');

    // Teacher Routes
    Route::get('/teachers', [TeacherController::class, 'findAll'])->name('teachers.all');
    Route::get('/teacher/{cpf}', [TeacherController::class, 'find'])->name('teacher.find');
    Route::post('/teacher/create', [TeacherController::class, 'register'])->name('teacher.create');
    Route::put('/teacher/update', [TeacherController::class, 'update'])->name('teacher.update');
    Route::patch('/teacher/desactive', [TeacherController::class, 'desactive'])->name('teacher.active');
    Route::patch('/teacher/active', [TeacherController::class, 'active'])->name('teacher.active');
});

// Teacher Routes Access
Route::middleware(['auth', EnsureIsTeacher::class, EnsureIsAdmin::class])->group(function () {
    Route::get('/teacher/{cpf}', [TeacherController::class, 'find'])->name('teacher.find');
    Route::put('/teacher/simpleupdate', [TeacherController::class, 'simpleUpdate'])->name('teacher.simple-update');
});

// Student Routes Access
Route::middleware(['auth', EnsureIsStudent::class, EnsureIsSecretary::class])->group(function () {});

// Admin Routes Access
Route::middleware(['auth', EnsureIsAdmin::class])->group(function () {
    // Secretary Routes
    Route::get('/secretaries', [SecretaryController::class, 'findAll'])->name('secretaries.all');
    Route::post('/secretary/create', [SecretaryController::class, 'newSecretary'])->name('secretary.create');
    Route::patch('/secretary/desactive', [SecretaryController::class, 'desactive'])->name('secretary.desactive');
    Route::patch('/secretary/active', [SecretaryController::class, 'active'])->name('secretary.active');
});
