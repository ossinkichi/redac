<?php

namespace App\Repositories;

use App\Dtos\NewStudentDto;
use App\Models\Student;
use Throwable;

class StudentRepository
{

    private Student $model;

    public function __construct()
    {
        $this->model = new Student();
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
