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

    public function findByClass(int $room)
    {
        $response = $this->repository->findByRoom($room);

        !$response && throw new ModelNotFoundException('Não foi possivel fazer a busca.');

        return $response->reject(function ($response) {
            return $response->status != true;
        });
    }

    public function findByTeacher(int $id)
    {
        $response = $this->repository->findByTeacher($id);

        !$response && throw new ModelNotFoundException('Não foi possivel fazer a busca.');

        return $response;
        // return $response->filter(function ($res) {
        //     return $res->status == true;
        // });
    }

    private function isRegistry($records, $room)
    {
        return $records->filter(function ($record) use ($room) {
            return $record->room->id == $room;
        });
    }

    public function register(CreateRoomDisciplineTeacherDto $dto)
    {
        $records = $this->repository->findByRoom($dto->room_id);

        if (!$this->isRegistry($records, $dto->room_id)) {
            return;
        }

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
