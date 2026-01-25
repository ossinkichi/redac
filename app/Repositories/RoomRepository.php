<?php

namespace App\Repositories;

use App\Models\ClassModel;
use Illuminate\Support\Collection;

class RoomRepository
{

    public function findAll(): Collection
    {
        return ClassModel::all();
    }

    public function find($id): ClassModel
    {
        return ClassModel::findOrFail($id);
    }

    public function create(array $data): ClassModel
    {
        return ClassModel::create($data);
    }
}
