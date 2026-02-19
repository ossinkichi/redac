<?php

use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureIsSecretary;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(
    function () {
        Route::get('/', [
            UserController::class,
            'loginView'
        ])->name('login.page');

        Route::post('/auth', [
            UserController::class,
            'authenticateLogin'
        ])->name('login.auth');
    }
);

Route::middleware('auth')->group(function () {

    // Student routes
    Route::middleware(EnsureIsSecretary::class)->group(function () {
        Route::get('student/feed', function () {
            return view('student.feed');
        })->name('student.home');
    });

    // Teacher routes
    Route::middleware(EnsureIsSecretary::class)->group(function () {
        Route::get('teacher', function () {
            return view('teacher.dashboard');
        })->name('teacher.home');
    });

    Route::middleware(EnsureIsSecretary::class)->group(function () {
        Route::get('secretaria', function () {
            return view('secretary.secretary.dashboard');
        })->name('secretary.home');

        Route::get('secretaria/{curso}/salas', function ($room) {
            return view('secretary.secretary.rooms');
        })->name('secretary.rooms');

        Route::get('secretaria/me', function () {
            return view('secretary.secretary.room');
        })->name('secretary.dashboard');

        Route::get('secretaria/lista/professores', function () {
            return view('secretary.teacher.listenner');
        })->name('secretary.teachers.listenner');

        Route::get('secretaria/lista/alunos', function () {
            return view('secretary.student.listenner');
        })->name('secretary.students.listenner');
    });
    // Secretary routes

});
