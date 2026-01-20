<?php

namespace App\Http\Controllers;

use App\Exceptions\Exceptions;
use App\Http\Resources\ClassResource;
use App\Services\ClassService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Throwable;

class ClassController extends Controller
{

    public function __construct(
        private ClassService $service
    ) {
        $this->service = $service;
    }
    public function findAll(): JsonResource
    {
        try {
            return ClassResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function find($id): JsonResource
    {
        try {
            return new JsonResource($this->service->find($id));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function register(array $data): Response
    {
        try {
            $dto = $data;
            $this->service->register($dto);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function updateAllData(array $data): Response
    {
        try {
            $dto = $data;
            $this->service->update($dto);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
