<?php

namespace App\Dtos;

class CreateClassDisciplineTeacherDto
{
    public function __construct(
        public int $teacher_id,
        public int $class_id,
        public int $discipline_id,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            teacher_id: $data['teacher_id'],
            class_id: $data['class_id'],
            discipline_id: $data['discipline_id'],
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
