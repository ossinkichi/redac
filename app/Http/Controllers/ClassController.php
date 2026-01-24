<?php

namespace App\Http\Controllers;

use App\Dtos\CreateClassDto;
use App\Dtos\UpdateClassDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\CreateClassRequest;
use App\Http\Requests\UpdateClassRequest;
use App\Http\Resources\ClassResource;
use App\Services\ClassService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Throwable;

class ClassController extends Controller
{

    public function __construct(
        private ClassService $service
    ) {}

    public function index(): JsonResource
    {
        try {
            return ClassResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function show($id): JsonResource
    {
        try {
            return new JsonResource($this->service->find($id));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateClassRequest $data): Response
    {
        try {
            $dto = CreateClassDto::make($data->toArray());
            $this->service->register($dto->toArray());

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
