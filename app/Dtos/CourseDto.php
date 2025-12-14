<?php

namespace App\Dtos;

use DateTime;

class CourseDto
{

    public function __construct(
        public int $id,
        public string $name,
        public string $description,
        public DateTime $created_at,
    ) {}

    public static function make(array $course): self
    {
        return new self(
            id: $course['id'],
            name: $course['name'],
            description: $course['description'],
            created_at: new DateTime($course['created_at']),
        );
    }

    public function toJson(): array
    {
        return \get_object_vars($this);
    }
}
