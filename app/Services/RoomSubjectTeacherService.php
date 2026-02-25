<?php

declare(strict_types=1);

namespace App\Services;

use App\Dtos\CreateRoomDisciplineTeacherDto;
use App\Repositories\RoomSubjectTeacherRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RoomSubjectTeacherService
{

    public function __construct(
        private readonly  RoomSubjectTeacherRepository $repository
    ) {}

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function findByClass(int $id)
    {
        $response = $this->repository->findByClass($id);

        !$response && throw new ModelNotFoundException('Não foi possivel fazer a busca.');

        return $response;
    }

    public function findByTeacher(int $id)
    {
        $response = $this->repository->findByTeacher($id);

        !$response && throw new ModelNotFoundException('Não foi possivel fazer a busca.');

        return $response;
    }

    public function register(CreateRoomDisciplineTeacherDto $dto)
    {

        $response = $this->repository->create($dto->toArray());

        !$response->exists && throw new ModelNotFoundException('Não foi possivel salvar a relaçào.');

        return $response;
    }

    public function delete(int $id): void
    {
        $response = $this->repository->find($id);

        !$response &&
            throw new ModelNotFoundException("Relação não encontrada.");

        $response->delete();
    }
}
