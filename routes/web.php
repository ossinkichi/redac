<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
// use App\Http\Middleware\EnsureIsSecretary;
use App\Http\Middleware\EnsureIsStudent;
use App\Http\Middleware\EnsureIsTeacher;
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

// Route::middleware('auth')->group(function () {

Route::get('/sair', [UserController::class, 'logout'])->name('logout');

// Student routes
Route::middleware(EnsureIsStudent::class)->group(function () {
    Route::get('student/feed', function () {
        return view('student.feed');
    })->name('student.home');
});

// Teacher routes
Route::middleware(EnsureIsTeacher::class)->group(function () {
    Route::get('teacher', function () {
        return view('teacher.dashboard');
    })->name('teacher.home');
});

// Secretary routes
// Route::middleware(EnsureIsSecretary::class)->group(function () {
Route::get('secretaria', function () {
    return view(
        'secretary.secretary.dashboard',
        ['courses' => app(CourseController::class)->index()]
    );
})->name('secretary.home');

Route::get('secretaria/{curso}/salas', function ($course) {
    return view('secretary.secretary.rooms', ['course' => $course]);
})->name('secretary.rooms');

Route::get('secretaria/{curso}/sala/registrar', function ($course) {
    return view('secretary.secretary.rooms.register', ['course' => $course]);
})->name('secretary.room.register');

Route::post('/sala/register', [RoomController::class, 'store'])->name('room.store');

Route::get('secretaria/me', function () {
    return view('secretary.secretary.room');
})->name('secretary.dashboard');

Route::get('secretaria/lista/professores', function () {
    return view('secretary.teacher.listenner', ['teachers' => app(TeacherController::class)->index()]);
})->name('secretary.teachers.listenner');

Route::get('secretaria/lista/alunos', function () {
    return view('secretary.student.listenner', ['students' => app(StudentController::class)->index()]);
})->name('secretary.students.listenner');

Route::get('secretaria/registrar/curso', function () {
    return view('secretary.secretary.course.register');
})->name('secretary.course.register');
Route::post('/curso/registrar', [CourseController::class, 'store'])->name('course.store');

Route::get('secretaria/registrar/aluno', function () {
    return view('secretary.student.register');
})->name('secretary.aluno.register');
Route::post('/aluno/registrar', [StudentController::class, 'store'])->name('student.store');

Route::get('secretaria/registrar/professor', function () {
    return view('secretary.teacher.register');
})->name('secretary.teacher.register');
Route::post('/professor/registrar', [TeacherController::class, 'store'])->name('teacher.store');

    // });

// });
