<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Dtos\CreateRoomDisciplineTeacherDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\CreateRoomDisciplineTeacherRequest;
use App\Http\Resources\ClassDisciplineTeacherResource;
use App\Services\RoomSubjectTeacherService;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

class RoomSubjectTeacherController extends Controller
{
    public function __construct(
        private readonly RoomSubjectTeacherService $service
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

    public function store(CreateRoomDisciplineTeacherRequest $data): Response
    {
        try {
            $dto = CreateRoomDisciplineTeacherDto::make($data->toArray());
            $this->service->register($dto);

            return \redirect()->back();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function destroy(int $id): Response
    {
        try {
            $this->service->delete($id);

            return \response()->noContent();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
