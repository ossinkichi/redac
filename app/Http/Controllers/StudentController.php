<?php

namespace App\Http\Controllers;

use App\Dtos\NewSrudentDto;
use App\Models\Student;
use App\Services\StudentService;
use Nette\Utils\Json;
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

    public function newStudent($student): Response
    {

        $this
            ->studentService
            ->newStudent(
                student: $student
            );

        return response(
            content: [],
            status: 201
        );
    }
}
