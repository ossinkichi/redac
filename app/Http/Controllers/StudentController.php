<?php

namespace App\Http\Controllers;

use App\Dtos\NewStudentDto;
use App\Dtos\UpdateAllDataStudentDto;
use App\Dtos\UpdateSimpleDataOfStudentDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateAllDataStudentRequest;
use App\Http\Requests\UpdateSimpleDataOfStudentRequest;
use App\Http\Resources\StudentResource;
use App\Services\StudentService;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

class StudentController extends Controller
{

    public function __construct(
        private StudentService $service
    ) {}

    public function index(): JsonResource
    {
        try {
            return
                StudentResource::collection($this
                    ->service
                    ->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function show(string $cpf): JsonResource
    {
        try {
            return new StudentResource($this->service->find($cpf));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateStudentRequest $request): Response
    {
        $dto = NewStudentDto::make(($request->toArray()));

        $this
            ->service
            ->create(
                $dto->toArray()
            );

        return response()->noContent();
    }

    public function updateAllData(UpdateAllDataStudentRequest $data): Response
    {
        try {
            $dto = UpdateAllDataStudentDto::make($data->toArray());

            $this->service->update(
                $dto->toArray()
            );

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function simpleUpdate(UpdateSimpleDataOfStudentRequest $data)
    {
        try {
            $dto = UpdateSimpleDataOfStudentDto::make($data->toArray());

            $this->service->update(
                $dto->toArray()
            );

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(string $cpf)
    {
        try {
            $this->service->update([
                'cpf' => $cpf,
                'is_active' => true,
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function desactive(string $cpf)
    {
        try {
            $this->service->update([
                'cpf' => $cpf,
                'is_active' => true,
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function formed(string $cpf)
    {
        try {
            $this->service->update([
                'cpf' => $cpf,
                'formed' => true,
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
