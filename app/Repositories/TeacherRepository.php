<?php

namespace App\Repositories;

use App\Models\Teacher;

class TeacherRepository
{
    private Teacher $model;

    public function __construct()
    {
        $this->model = new Teacher();
    }

    public function newTeacher(array $data): Teacher
    {
        return $this->model->create($data);
    }

    public function findByCpf(string $cpf): ?Teacher
    {
        return $this->model->where('cpf', $cpf)->first();
    }
}
