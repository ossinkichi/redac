<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomSubjectTeacherController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
// use App\Http\Middleware\EnsureIsSecretary;
use App\Http\Middleware\EnsureIsStudent;
// use App\Http\Middleware\EnsureIsTeacher;
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
// Route::middleware(EnsureIsTeacher::class)->group(function () {
Route::get('professor', function () {
    dd(app(RoomSubjectTeacherController::class)->index());
    return view(
        'teacher.dashboard',
        ['rooms' => app(RoomController::class)->index()]
    );
})->name('teacher.home');

// });

// Secretary routes
// Route::middleware(EnsureIsSecretary::class)->group(function () {
Route::get('secretaria', function () {
    return view(
        'secretary.secretary.dashboard',
        ['courses' => app(CourseController::class)->index()]
    );
})->name('secretary.home');

Route::get('secretaria/{curso}/salas', function ($course) {
    return view(
        'secretary.secretary.room.listing',
        ['rooms' => app(RoomController::class)->show($course), 'course' => $course]
    );
})->name('secretary.rooms');

Route::get('secretaria/{curso}/sala/registrar', function ($course) {
    return view('secretary.secretary.room.register', ['course' => $course]);
})->name('secretary.room.register');

Route::post('/sala/register', [RoomController::class, 'store'])->name('room.store');

Route::get('secretaria/{course}/sala/{room}', function ($room, $course) {
    return view(
        'secretary.secretary.room.show',
        ['room' => $room, 'course' => $course, 'students' => app(StudentController::class)->getRoom($course, $room)]
    );
})->name('secretary.room.show');

Route::get('secretaria/{course}/sala/{room}/adicionar-materia', function ($course, $room) {
    return view('secretary.student.listing-and-select', [$course, 'room' => $room, 'teachers' => app(TeacherController::class)->index(), 'subjects' => app(SubjectController::class)->index()]);
})->name('secretary.room.listingsubjectsofadded');
Route::patch('secretaria/aluno/adicionar', [StudentController::class, 'setRoom'])->name('room.addedstudent');

Route::get('secretaria/{course}/sala/{room}/adicionar-aluno', function ($course, $room) {
    return view('secretary.teacher.listing-and-select', [$course, 'room' => $room, 'students' => app(StudentController::class)->filterCourseToEnterInRoom($course, $room),]);
})->name('secretary.room.listingstudentofadded');
Route::post('secretaria/materia/adicionar', [RoomSubjectTeacherController::class, 'store'])->name('room.subjectandteacher');

Route::get('secretaria/me', function () {
    return;
})->name('secretary.dashboard');

Route::get('secretaria/lista/professores', function () {
    return view('secretary.teacher.listing', ['teachers' => app(TeacherController::class)->index()]);
})->name('secretary.teachers.listing');

Route::get('secretaria/lista/alunos', function () {
    return view('secretary.student.listing', ['students' => app(StudentController::class)->index()]);
})->name('secretary.students.listing');

Route::get('secretaria/registrar/curso', function () {
    return view('secretary.secretary.course.register');
})->name('course.register');
Route::post('/curso/registrar', [CourseController::class, 'store'])->name('course.store');

Route::get('secretaria/registrar/materia', function () {
    return view(
        'secretary.secretary.subject.register',
        ['subjects' => app(SubjectController::class)->index()]
    );
})->name('subject.register');
Route::post('/materia/registrar', [SubjectController::class, 'store'])->name('subject.store');

Route::get('secretaria/registrar/aluno', function () {
    return view('secretary.student.register', ['courses' => app(CourseController::class)->index()]);
})->name('secretary.aluno.register');
Route::post('/aluno/registrar', [StudentController::class, 'store'])->name('student.store');

Route::get('secretaria/registrar/professor', function () {
    return view('secretary.teacher.register', ['subjects' => app(SubjectController::class)->index()]);
})->name('secretary.teacher.register');
Route::post('/professor/registrar', [TeacherController::class, 'store'])->name('teacher.store');

    // });

// });
