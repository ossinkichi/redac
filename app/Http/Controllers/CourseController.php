<?php

namespace App\Http\Controllers;

use App\Exceptions\Exceptions;
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

    public function find(int $id)
    {
        try {
            return new CourseResource($this->service->find($id));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function register(array $data): Response
    {
        try {
            $this->service->register($data);

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

    public function active($id)
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
    public function desactive($id)
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
