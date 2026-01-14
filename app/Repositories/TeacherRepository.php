<?php

namespace App\Repositories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Collection;

class TeacherRepository
{

    public function all(): Collection
    {
        return Teacher::all();
    }
    public function newTeacher(array $data): Teacher
    {
        return Teacher::create($data);
    }

    public function findByCpf(string $cpf): Teacher
    {
        return Teacher::where('cpf', $cpf)->first();
    }
}
