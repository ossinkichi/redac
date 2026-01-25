<?php

namespace App\Services;

use App\Dtos\Subject\CreateSubjectDto;
use App\Models\Subject;
use App\Dtos\Subject\UpdateSubjectDto;
use App\Repositories\SubjectRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SubjectService
{

    public function __construct(
        private readonly SubjectRepository $repository
    ) {}

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function register(CreateSubjectDto $data): Subject
    {
        $response = $this->repository->create($data->toArray());

        !$response->exists &&
            throw new ModelNotFoundException('Não foi possivel criar a disciplina.');

        return $response;
    }

    public function update(UpdateSubjectDto $dto): Subject
    {
        $response = $this->repository->find($dto->id);

        !$response &&
            throw new ModelNotFoundException('Disciplina não encontrada.');

        $response->update($dto->toArray());

        !$response->wasChanged() &&
            throw new ModelNotFoundException('Não foi possivel atualizar.');

        return $response;
    }
}
