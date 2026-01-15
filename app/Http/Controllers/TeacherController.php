<?php

namespace App\Http\Controllers;

use App\Dtos\CreateTeacherDto;
use App\Http\Requests\CreateTeacherRequest;
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

    public function newTeacher(CreateTeacherRequest $dto): void
    {
        $this->service->create($dto->toArray());
    }

    public function edit(array $data): void {}

    public function tradePassword(array $data): void {}
}
