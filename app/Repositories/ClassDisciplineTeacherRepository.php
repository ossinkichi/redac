<?php

namespace App\Repositories;

use App\Models\ClassDisciplineTeacher;
use Illuminate\Database\Eloquent\Collection;

class ClassDisciplineTeacherRepository
{

    public function findByClass(int $classId): Collection
    {
        return ClassDisciplineTeacher::where('class_id', $classId)->get();
    }

    public function findByTeacher(int $TeacherId): Collection
    {
        return ClassDisciplineTeacher::where('teacher_id', $TeacherId)->get();
    }

    public function findAll(): Collection
    {
        return ClassDisciplineTeacher::all();
    }

    public function create(array $data): ClassDisciplineTeacher
    {
        return ClassDisciplineTeacher::create($data);
    }
}
