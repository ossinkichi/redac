<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{

    public function create(array $data): Student
    {
        return Student::create($data);
    }

    public function findAll()
    {
        return Student::all();
    }

    public function findByCpf(string $cpf): ?Student
    {
        return Student::where('cpf', $cpf)->first();
    }
}
