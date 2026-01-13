<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateStudentRequest;
use App\Repositories\UserRepository;
use App\Services\StudentService;
use App\Services\UserService;
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

    public function createNewStudent(CreateStudentRequest $request): Response
    {

        $response = $this
            ->studentService
            ->newStudent(
                student: $request->toDto()
            );

        $userResponse = UserService::newUser(
            [
                'user' => $request->cpf,
                'password' => $request->password,
                'role' => $request->role,
            ]
        );

        return response(
            content: $response,
            status: 201
        );
    }
}
