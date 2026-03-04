<?php

namespace App\Dtos;

class UpdateRoomOfStudentDto
{
    public function __construct(
        public int $room,
        public int $student,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            room: $data['room'],
            student: $data['student'],
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
