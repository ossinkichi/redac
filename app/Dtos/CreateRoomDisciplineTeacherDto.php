<?php

namespace App\Dtos;

class CreateRoomDisciplineTeacherDto
{
    public function __construct(
        public int $teacher_id,
        public int $room_id,
        public int $subject_id,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            teacher_id: $data['teacher'],
            room_id: $data['room'],
            subject_id: $data['subject'],
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
