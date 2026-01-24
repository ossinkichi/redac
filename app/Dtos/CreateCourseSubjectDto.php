<?php

namespace App\Dtos;

class CreateCourseSubjectDto
{
    public function __construct(
        public int $course_id,
        public int $discipline_id,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            course_id: $data['course_id'],
            discipline_id: $data['discipline_id']
        );
    }

    public function toArray(): array
    {
        return [
            get_object_vars($this)
        ];
    }
}
