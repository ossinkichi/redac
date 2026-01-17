<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{

    public function __construct(private Student $model)
    {
        $this->model = $model;
    }

    public function create(array $data): Student
    {
        return Student::create($data);
    }

    public function findAll()
    {
        return $this->model->all();
    }

    public function findByCpf(string $cpf): ?Student
    {
        return $this->model->where('cpf', $cpf)->first();
    }
}
