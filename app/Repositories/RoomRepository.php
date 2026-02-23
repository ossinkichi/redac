<?php

namespace App\Repositories;

use App\Models\Room;
use Illuminate\Support\Collection;

class RoomRepository
{

    public function findAll(): Collection
    {
        return Room::all();
    }

    public function find($id): Room
    {
        return Room::findOrFail($id);
    }

    public function create(array $data): Room
    {
        return Room::create($data);
    }
}
