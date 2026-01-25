<?php

namespace App\Http\Controllers;

use Throwable;
use Illuminate\Http\Response;
use App\Exceptions\Exceptions;
use App\Services\TeacherService;
use App\Dtos\Teacher\CreateTeacherDto;
use App\Http\Resources\TeacherResource;
use App\Dtos\Teacher\UpdateAllDataOfTeacherDto;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Dtos\Teacher\UpdateSimpleDataOfTeacherDto;
use App\Http\Requests\Teacher\CreateTeacherRequest;
use App\Http\Requests\Teacher\SimpleUpdateDataOfTeacher;

class TeacherController extends Controller
{

    public function __construct(private TeacherService $service) {}

    public function index(): JsonResource
    {
        try {
            return TeacherResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function show(string $cpf): JsonResource
    {
        try {
            $response = $this->service->find($cpf);
            return new TeacherResource($response);
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateTeacherRequest $teacherData): Response
    {
        try {
            $dto = CreateTeacherDto::make($teacherData->toArray());
            $this->service->create($dto);

            return response()->noContent();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function update(UpdateAllDataOfTeacherDto $data): Response
    {
        try {
            $dto = UpdateAllDataOfTeacherDto::make($data->toArray());
            $this->service->update($dto);

            return \response()->noContent();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function simpleUpdate(SimpleUpdateDataOfTeacher $data): Response
    {
        try {
            $dto = UpdateSimpleDataOfTeacherDto::make($data->toArray());
            $response = $this->service->simpleUpdate($dto);

            return response(content: [
                'message' => 'Dados simples do professor atualizados com sucesso.',
                'data' => new TeacherResource($response)
            ], status: 200);
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function desactive(string $cpf): Response
    {
        try {
            $this->service->updateStatus([
                'cpf' => $cpf,
                'is_active' => false
            ]);

            return response(content: [
                'message' => 'Professor desativado com sucesso.',
            ], status: 200);
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(string $cpf): Response
    {
        try {
            $this->service->updateStatus([
                'cpf' => $cpf,
                'is_active' => true
            ]);

            return response(content: [
                'message' => 'Professor ativado com sucesso.',
            ], status: 200);
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
