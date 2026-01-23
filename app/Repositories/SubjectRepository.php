<?php

namespace App\Repositories;

use App\Models\Subject;
use Illuminate\Database\Eloquent\Collection;

class SubjectRepository
{

    public function findAll(): Collection
    {
        return Subject::all();
    }

    public function find(int $id): Subject
    {
        return Subject::where('id', $id)->first();
    }

    public function create(array $data): Subject
    {
        return Subject::create($data);
    }
}
