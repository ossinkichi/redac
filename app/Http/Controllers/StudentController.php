<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Repositories\UserRepository;
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

        $response = $this
            ->studentService
            ->newStudent(
                student: $request->toDto()
            );

        return response(
            content: [$response ?? null],
            status: 201
        );
    }
}
