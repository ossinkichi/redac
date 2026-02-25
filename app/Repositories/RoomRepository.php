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

    public function find($id): Collection
    {
        return Room::with('course')->where('course_id', $id)->get();
    }

    public function create(array $data): Room
    {
        return Room::create($data);
    }
}
