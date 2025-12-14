<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/student/{student}', [StudentController::class, 'findStudent'])->name('student.find');
Route::post('student/create')->name('student.register');
