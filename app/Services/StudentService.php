<?php

namespace App\Services;

use App\Repositories\StudentRepository;

class StudentService
{

    private StudentRepository $studentRepository;

    public function findStudent(string $student)
    {
        $dataStudent = $this->studentRepository->findByCpf($student);
    }
}
