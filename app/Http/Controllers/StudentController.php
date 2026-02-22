<?php

namespace App\Http\Controllers;

use Throwable;
use App\Exceptions\Exceptions;
use App\Services\StudentService;
use App\Dtos\Student\UpdateAllDataStudentDto;
use App\Dtos\Student\CreateStudentDto;
use App\Http\Resources\StudentResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Dtos\Student\UpdateSimpleDataOfStudentDto;
use App\Http\Requests\Student\UpdateAllDataStudentRequest;
use App\Http\Requests\Student\CreateStudentRequest;
use App\Http\Requests\Student\UpdateSimpleDataOfStudentRequest;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class StudentController extends Controller
{

    public function __construct(
        private readonly StudentService $service
    ) {}

    public function index(): JsonResource
    {
        try {
            return StudentResource::collection($this
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
        $dto = CreateStudentDto::make(($request->toArray()));

        $this->service->create($dto);

        return response()->noContent();
    }

    public function updateAllData(UpdateAllDataStudentRequest $request): Response
    {
        try {
            $dto = UpdateAllDataStudentDto::make($request->toArray());

            $this->service->update(
                $dto
            );

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function simpleUpdate(UpdateSimpleDataOfStudentRequest $request)
    {
        try {
            $dto = UpdateSimpleDataOfStudentDto::make($request->toArray());

            $this->service->SimpleUpdate(
                $dto
            );

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(string $cpf)
    {
        try {
            $this->service->updateStatus([
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
            $this->service->updateStatus([
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
            $this->service->updateStatus([
                'cpf' => $cpf,
                'formed' => true,
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
