<?php

namespace App\Dtos;

use DateTime;

class ClassDto
{

    public function __construct(
        public int $id,
        public int $serie,
        public string $course,
        public string $shift,
        public string $room,
        public DateTime $created_at,
    ) {}

    public static function make(array $class): self
    {
        return new self(
            id: $class['id'],
            serie: $class['series'],
            course: $class['course'],
            shift: $class['shift'],
            room: $class['room'],
            created_at: new DateTime($class['created_at']),
        );
    }

    public function toJson(): array
    {
        return \get_object_vars($this);
    }
}
