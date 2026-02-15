<?php

use App\Http\Controllers\UserController;
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


Route::get('student/feed', function () {
    return view('student.feed');
})->name('student.feed');

Route::get('teacher', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard');

// Secretary routes
Route::get('secretary', function () {
    return view('secretary.secretary.dashboard');
})->name('secretary.dashboard');

Route::get('secretary/room/{room}', function ($room) {
    return view('secretary.secretary.room', $room);
})->name('secretary.dashboard');

Route::get('secretary/me', function () {
    return view('secretary.secretary.room');
})->name('secretary.dashboard');
