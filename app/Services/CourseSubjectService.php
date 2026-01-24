<?php

namespace App\Services;

use App\Models\CourseSubject;
use App\Repositories\CourseSubjectRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CourseSubjectService
{

    public function __construct(
        private readonly CourseSubjectRepository $repository
    ) {}

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function find(int $id): CourseSubject
    {
        $response = $this->repository->find($id);

        !$response && throw new ModelNotFoundException('Relação não encontrada.');

        return $response;
    }

    public function findByCourse(int $id): Collection
    {
        return $this->repository->findByCourse($id);
    }

    public function register(array $data): CourseSubject
    {
        $response = $this->repository->create($data);

        !$response->exists && throw new ModelNotFoundException('Nào foi possivel salvar a relaçào.');

        return $response;
    }

    public function delete(int $id): void
    {
        $this->repository->find($id)->delete();
    }
}
