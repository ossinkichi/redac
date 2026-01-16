<?php

namespace App\Http\Controllers;

use App\Dtos\CreateTeacherDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\CreateTeacherRequest;
use App\Http\Resources\TeacherResource;
use App\Models\Teacher;
use App\Services\TeacherService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Nette\Utils\Json;
use Throwable;

class TeacherController extends Controller
{
    private TeacherService $service;

    public function __construct(TeacherService $service)
    {
        $this->service = $service;
    }

    public function findAll(): JsonResource
    {
        return TeacherResource::collection($this->service->findAll());
    }

    public function find(string $cpf): JsonResource
    {
        $data = $this->service->find($cpf);
        return new TeacherResource($data);
    }

    public function newTeacher(CreateTeacherRequest $teacherData): Response
    {
        try {
            $dto = CreateTeacherDto::make($teacherData->toArray());
            $this->service->create($dto->toArray());

            return response(content: [], status: 201);
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function edit(array $data): void {}

    public function tradePassword(array $data): void {}
}
