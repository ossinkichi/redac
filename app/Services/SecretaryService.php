<?php

namespace App\Services;

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

    public function create(array $data)
    {
        DB::transaction(function () use ($data, &$response) {

            $response = $this->repository->create($data);

            (!$response instanceof Secretary || !$response->exists) &&
                throw new \DomainException("Erro ao criar secretário(a).");

            UserService::newUser([
                'user' => $data['cpf'],
                'password' => $data['date_of_birth'],
                'role' => 'secretary'
            ]);
        });

        return $response;
    }

    public function update(array $data)
    {
        !$data['cpf'] &&
            throw new \InvalidArgumentException("CPF é obrigatório para atualização.");

        $secretary = $this->find($data['cpf']);

        (!$secretary) &&
            throw new ModelNotFoundException("Secretário(a) não encontrado para atualização.");

        $secretary->update($data);

        !$secretary->wasChanged() &&
            throw new \DomainException("Nenhum dado foi alterado para o(a) secretário(a).");

        return $secretary;
    }

    public function desactive(string $cpf): Secretary
    {
        $secretary = $this->find($cpf);

        if ($secretary['status'] === false) {
            throw new \DomainException("Secretário(a) já está inativo(a).");
        }

        $secretary->update(['status' => false]);

        return $secretary;
    }

    public function active(string $cpf): Secretary
    {
        $secretary = $this->find($cpf);

        if ($secretary['status'] === false) {
            throw new \DomainException("Secretário(a) já está inativo(a).");
        }

        $secretary->update(['status' => false]);

        return $secretary;
    }
}
