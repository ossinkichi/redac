<?php

namespace App\Repositories;

use App\Models\Student;

class StudentRepository
{

    public function create(array $data): Student
    {
        return Student::create($data);
    }

    public function findAll()
    {
        return Student::with('course')->get();
    }

    public function find(int $student)
    {
        return Student::where('id', $student)->first();
    }

    public function findByCourse($course)
    {
        return Student::where('course_id', $course)->where('is_active', true)->where('formed', false)->with('course')->get();
    }

    public function findByRoom($room)
    {
        return Student::where('room_id', $room)->where('is_active', true)->where('formed', false)->with(['course', 'room'])->get();
    }

    public function findByCpf(string $cpf): ?Student
    {
        return Student::where('cpf', $cpf)->first();
    }
}
