<?php

namespace App\Http\Controllers;

use Throwable;
use Illuminate\Http\Response;
use App\Exceptions\Exceptions;
use App\Services\SecretaryService;
use App\Http\Resources\SecretaryResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Dtos\Secretary\CreateSecretaryEmployeDto;
use App\Dtos\Secretary\UpdateSecretaryEmployerDto;
use App\Http\Requests\Secretary\createsecretaryEmployerRequest;
use App\Http\Requests\Secretary\UpdateAllDataSecretaryEmployerRequest;
use App\Http\Requests\Secretary\UpdateSecretaryEmployerRequest;

class SecretaryController extends Controller
{

    public function __construct(private SecretaryService $service) {}

    public function index(): JsonResource
    {
        try {
            return SecretaryResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function show(string $cpf): JsonResource
    {
        try {
            $response = $this->service->find($cpf);
            return new SecretaryResource($response);
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreatesecretaryEmployerRequest $request): Response
    {
        try {
            $dto = CreateSecretaryEmployeDto::make($request->toArray());
            $this->service->create($dto);

            return \response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function update(UpdateAllDataSecretaryEmployerRequest $request)
    {
        try {
            $dto = UpdateSecretaryEmployerDto::make($request->toArray());
            $this->service->update($dto);

            return \response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function desactive(string $cpf): Response
    {
        try {
            $this->service->updateStatus(
                [
                    'cpf' => $cpf,
                    'status' => false
                ]
            );
            return \response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(string $cpf): Response
    {
        try {
            $this->service->updateStatus([
                'cpf' => $cpf,
                'status' => true
            ]);

            return \response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
