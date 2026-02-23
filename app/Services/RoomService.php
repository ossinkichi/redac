<?php

namespace App\Services;

use App\Dtos\Room\CreateRoomDto;
use App\Models\Room;
use App\Repositories\RoomRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RoomService
{

    public function __construct(
        private RoomRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function find(int $id): Room
    {
        return $this->repository->find($id);
    }

    public function register(CreateRoomDto $data): Room
    {
        $response = $this->repository->create($data->toArray());

        !$response->exists && throw new ModelNotFoundException('Não foi possivel registrar a classe');

        return $response;
    }

    public function updateStatus(array $data): Room
    {
        $room = $this->repository->find($data['id']);
        $room->update($data);

        !$room->wasChanged() && new ModelNotFoundException('Nào foi possivel editar a classe.');

        return $room;
    }
}
