<?php

namespace App\Http\Controllers;

use App\Dtos\NewStudentDto;
use App\Http\Requests\CreateStudentRequest;
use App\Repositories\UserRepository;
use App\Services\StudentService;
use App\Services\UserService;
use Symfony\Component\HttpFoundation\Response;

class StudentController extends Controller
{

    public function __construct(
        private StudentService $service
    ) {
        $this->service = $service;
    }

    public function findStudent(string $student): Response
    {
        return response(
            content: $this
                ->service
                ->find(
                    $student
                )
        );
    }

    public function createNewStudent(CreateStudentRequest $request): Response
    {
        $dto = NewStudentDto::make(($request->toArray()));

        $this
            ->service
            ->newStudent(
                $dto->toArray()
            );

        return response()->noContent();
    }
}
