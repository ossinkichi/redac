<?php

namespace App\Repositories;

use App\Models\CourseSubject;
use Illuminate\Database\Eloquent\Collection;

class CourseSubjectRepository
{
    public function findAll(): Collection
    {
        return CourseSubject::all();
    }

    public function find(int $id): CourseSubject
    {
        return CourseSubject::findOrFail($id);
    }

    public function findByCourse(int $id): Collection
    {
        return CourseSubject::where('course_id', $id)->get();
    }

    public function create(array $data): CourseSubject
    {
        return CourseSubject::create($data);
    }
}
