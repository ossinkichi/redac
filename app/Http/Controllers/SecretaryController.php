<?php

namespace App\Http\Controllers;

use App\Dtos\CreateSecretaryEmployeDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\createsecretaryEmployerRequest;
use App\Http\Requests\UpdateAllDataSecretaryEmployerRequest;
use App\Http\Resources\SecretaryResource;
use App\Services\SecretaryService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Response;
use Throwable;

class SecretaryController extends Controller
{

    public function __construct(private SecretaryService $service)
    {
        $this->service = $service;
    }

    public function find(string $cpf): JsonResource
    {
        try {
            $response = $this->service->find($cpf);
            return new SecretaryResource($response);
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function findAll(): JsonResource
    {
        try {
            return SecretaryResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function register(CreatesecretaryEmployerRequest $data): Response
    {
        try {
            $dto = CreateSecretaryEmployeDto::make($data->toArray());
            $this->service->create($dto->toArray());

            return \response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function update(UpdateAllDataSecretaryEmployerRequest $data)
    {
        try {
            $dto = CreateSecretaryEmployeDto::make($data->toArray());
            $this->service->update($dto->toArray());

            return \response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function desactive(string $cpf): Response
    {
        try {
            $this->service->desactive($cpf);
            return \response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(string $cpf): Response
    {
        try {
            $this->service->active($cpf);

            return \response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
