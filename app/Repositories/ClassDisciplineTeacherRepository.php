<?php

namespace App\Repositories;

use App\Models\ClassDisciplineTeacher;
use App\Models\RoomDisciplineTeacher;
use Illuminate\Database\Eloquent\Collection;

class RoomDisciplineTeacherRepository
{

    public function find(int $id): RoomDisciplineTeacher
    {
        return RoomDisciplineTeacher::findOrFail($id);
    }

    public function findByClass(int $classId): Collection
    {
        return RoomDisciplineTeacher::where('class_id', $classId)->get();
    }

    public function findByTeacher(int $TeacherId): Collection
    {
        return RoomDisciplineTeacher::where('teacher_id', $TeacherId)->get();
    }

    public function findAll(): Collection
    {
        return RoomDisciplineTeacher::all();
    }

    public function create(array $data): RoomDisciplineTeacher
    {
        return RoomDisciplineTeacher::create($data);
    }
}
