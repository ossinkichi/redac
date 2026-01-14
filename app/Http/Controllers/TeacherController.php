<?php

namespace App\Http\Controllers;

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

    public function find(string $cpf) {}

    public function edit(array $data) {}
}
