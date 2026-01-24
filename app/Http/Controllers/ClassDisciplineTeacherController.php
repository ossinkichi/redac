<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Dtos\CreateClassDisciplineTeacherDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\CreateClassDisciplineTeacherRequest;
use App\Http\Resources\ClassDisciplineTeacherResource;
use App\Services\ClassDisciplineTeacherService;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

class ClassDisciplineTeacherController extends Controller
{
    public function __construct(
        private ClassDisciplineTeacherService $service
    ) {}

    public function index(): JsonResource
    {
        try {
            return ClassDisciplineTeacherResource::collection($this->service->findAll());
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function showByTeacher(int $id): JsonResource
    {
        try {
            $reponse = $this->service->findByTeacher($id);

            return ClassDisciplineTeacherResource::collection($reponse);
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function showByClass(int $id): JsonResource
    {
        try {
            $reponse = $this->service->findByClass($id);

            return ClassDisciplineTeacherResource::collection($reponse);
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateClassDisciplineTeacherRequest $data): Response
    {
        try {
            $dto = CreateClassDisciplineTeacherDto::make($data->toArray());
            $this->service->register($dto->toArray());

            return response()->noContent();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
