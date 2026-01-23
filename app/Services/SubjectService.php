<?php

namespace App\Services;

use App\Models\Subject;
use App\Repositories\SubjectRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SubjectService
{

    public function __construct(
        private SubjectRepository $repository
    ) {}

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function register(array $data): Subject
    {
        $response = $this->repository->create($data);

        !$response->exists && new ModelNotFoundException('Não foi possivel criar a disciplina.');

        return $response;
    }

    public function update(array $data): Subject
    {
        $response = $this->repository->find($data['id']);

        !$response && new ModelNotFoundException('Não foi possivel atualizar.');

        unset($data['id']);
        $response->update($data);

        return $response;
    }
}
