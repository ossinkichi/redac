<?php

namespace App\Http\Controllers;

use App\Dtos\NewTeacerDto;
use App\Models\Teacher;
use App\Services\TeacherService;

class TeacherController extends Controller
{
    private TeacherService $service;

    public function __construct(TeacherService $service)
    {
        $this->service = $service;
    }

    public function findAll()
    {
        return $this->service->findAll();
    }

    public function find(string $cpf): Teacher
    {
        return $this->service->find($cpf);
    }

    public function edit(array $data): void {}

    public function newTeacher(array $data): void {}

    public function tradePassword(array $data): void {}
}
