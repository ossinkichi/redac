<?php

namespace App\Repositories;

use App\Models\RoomSubjectTeacher;
use Illuminate\Database\Eloquent\Collection;

class RoomSubjectTeacherRepository
{

    public function find(int $id): RoomSubjectTeacher
    {
        return RoomSubjectTeacher::findOrFail($id);
    }

    public function findByRoom(int $room): Collection
    {
        return RoomSubjectTeacher::where('room_id', $room)->get();
    }

    public function findByTeacher(int $TeacherId): Collection
    {
        return RoomSubjectTeacher::with('teacher')->where('teacher_id', $TeacherId)->get();
    }

    public function findAll(): Collection
    {
        return RoomSubjectTeacher::all();
    }

    public function create(array $data): RoomSubjectTeacher
    {
        return RoomSubjectTeacher::create($data);
    }
}
