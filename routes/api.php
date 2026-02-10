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

Route::get('/secretary/{cpf}', [SecretaryController::class, 'show'])->name('secretary.find');
Route::put('/secretary/update', [SecretaryController::class, 'update'])->name('secretary.update');
Route::get('/secretaries', [SecretaryController::class, 'index'])->name('secretaries.all');
Route::post('/secretary/create', [SecretaryController::class, 'store'])->name('secretary.create');
Route::patch('/secretary/desactive', [SecretaryController::class, 'desactive'])->name('secretary.desactive');
Route::patch('/secretary/active', [SecretaryController::class, 'active'])->name('secretary.active');

Route::get('/teachers', [TeacherController::class, 'index'])->name('teachers.all');
Route::get('/teacher/{cpf}', [TeacherController::class, 'show'])->name('teacher.find');
Route::post('/teacher/create', [TeacherController::class, 'store'])->name('teacher.create');
Route::put('/teacher/update', [TeacherController::class, 'update'])->name('teacher.update');
Route::patch('/teacher/desactive', [TeacherController::class, 'desactive'])->name('teacher.desactive');
Route::patch('/teacher/active', [TeacherController::class, 'active'])->name('teacher.active');
Route::put('/teacher/simpleupdate', [TeacherController::class, 'simpleUpdate'])->name('teacher.simple-update');

Route::post('/student/register', [StudentController::class, 'store'])->name('student.create');
Route::get('/students', [StudentController::class, 'index'])->name('student.all');
Route::get('/student/{cpf}', [StudentController::class, 'show'])->name('student.find');
Route::put('/student/update', [StudentController::class, 'updateAllData'])->name('student.update');
Route::patch('/student/active/{cpf}', [StudentController::class, 'active'])->name('student.active');
Route::patch('/student/desactive/{cpf}', [StudentController::class, 'desactive'])->name('student.desactive');
Route::patch('/student/formed/{cpf}', [StudentController::class, 'formed'])->name('student.formed');
Route::put('/student/SimpleUp', [StudentController::class, 'simpleUpdate'])->name('student.simpleUp');
