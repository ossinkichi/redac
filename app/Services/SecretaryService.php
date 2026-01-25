<?php

namespace App\Services;

use App\Dtos\Secretary\CreateSecretaryEmployeDto;
use App\Dtos\Secretary\UpdateSecretaryEmployerDto;
use App\Http\Requests\Secretary\UpdateAllDataSecretaryEmployerRequest;
use App\Models\Secretary;
use App\Repositories\SecretaryRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Throwable;

class SecretaryService
{

    public function __construct(
        private SecretaryRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function find(string $cpf): Secretary
    {
        $response = $this->repository->find($cpf);

        (!$response) &&
            throw new ModelNotFoundException("Secretário(a) não encontrada.");

        return $response;
    }

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function create(CreateSecretaryEmployeDto $dto)
    {
        return DB::transaction(function () use ($dto) {

            $response = $this->repository->create($dto->toArray());

            (!$response instanceof Secretary || !$response->exists) &&
                throw new \DomainException("Erro ao criar secretário(a).");

            UserService::newUser([
                'user' => $dto->cpf,
                'password' => $dto->date_of_birth,
                'role' => 'secretary'
            ]);
        });
    }

    public function update(UpdateSecretaryEmployerDto $dto)
    {
        $secretary = $this->find($dto->cpf);

        (!$secretary) &&
            throw new ModelNotFoundException("Secretário(a) não encontrado para atualização.");

        $secretary->update($dto->toArray());

        !$secretary->wasChanged() &&
            throw new \DomainException("Nenhum dado foi alterado para o(a) secretário(a).");

        return $secretary;
    }

    public function updateStatus(array $data): Secretary
    {
        $secretary = $this->find($data['cpf']);

        !$secretary && throw new ModelNotFoundException('Funcionario(a) da secretaria não encontrado');

        $secretary->update($data);

        !$secretary->wasChanged() && throw new ModelNotFoundException('Nào foi possivel atualizar o(a) funcionario(a)');

        return $secretary;
    }
}
