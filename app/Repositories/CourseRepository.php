<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\Support\Collection;

class CourseRepository
{

    public function findAll(): Collection
    {
        return Course::all();
    }

    public function find($courseId): Course
    {
        return Course::where('id', $courseId)->first();
    }

    public function create(array $data): Course
    {
        return Course::create($data);
    }
}
