<?php

namespace App\Http\Controllers;

use App\Dtos\NewStudentDto;
use App\Http\Requests\CreateStudentRequest;
use App\Services\StudentService;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends Controller
{
    private StudentService $studentService;

    public function findStudent(string $student): Response
    {
        return response(
            content: $this
                ->studentService
                ->findStudent(
                    studentCpf: $student
                )
        );
    }

    public function newStudent(CreateStudentRequest $request): Response
    {

        $this
            ->studentService
            ->newStudent(
                student: $request
            );

        return response(
            content: [],
            status: 201
        );
    }
}
