<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Dtos\CreateCourseDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\CreateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Services\CourseService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Throwable;

class CourseController extends Controller
{
    public function __construct(
        private CourseService $service
    ) {
        $this->service = $service;
    }

    public function findAll(): JsonResource
    {
        try {
            return CourseResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function find(int $id): JsonResource
    {
        try {
            return new CourseResource($this->service->find($id));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function register(CreateCourseRequest $data): Response
    {
        try {
            $dto = CreateCourseDto::make($data->toArray());
            $this->service->register($dto->toArray());

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function updateAllData(array $data): Response
    {
        try {
            $this->service->update($data);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(int $id): Response
    {
        try {
            $this->service->update([
                'id' => $id,
                'status' => true
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function desactive(int $id): Response
    {
        try {
            $this->service->update([
                'id' => $id,
                'status' => false
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
