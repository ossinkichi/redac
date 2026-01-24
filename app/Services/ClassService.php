<?php

namespace App\Services;

use App\Models\ClassModel;
use App\Repositories\ClassRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClassService
{

    public function __construct(
        private ClassRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function find(int $id): ClassModel
    {
        return $this->repository->find($id);
    }

    public function register(array $data): ClassModel
    {
        $response = $this->repository->create($data);

        !$response->exists && throw new ModelNotFoundException('Não foi possivel registrar a classe');

        return $response;
    }

    public function update(array $data): ClassModel
    {
        $room = $this->repository->find($data['id']);
        $room->update($data);

        !$room->wasChanged() && new ModelNotFoundException('Nào foi possivel editar a classe.');

        return $room;
    }
}
