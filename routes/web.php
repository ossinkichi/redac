<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    UserController::class,
    'loginView'
])->name('login.page');

// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth')->name('home.page');

// Route::middleware(['auth', 'student'])->group(function () {
//     Route::get('/register', [
//         UserController::class,
//         'registerView'
//     ])->name('register.page');
// });

// Route::middleware(['auth', 'student'])->group(function () {});
