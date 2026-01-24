<?php

namespace App\Dtos;

class CreateClassDto
{
    public function __construct(
        public int $series,
        public string $course,
        public string $shift,
        public string $room,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            series: $data['series'],
            course: $data['course'],
            shift: $data['shift'],
            room: $data['room'],
        );
    }

    public function toArray(): array
    {
        return [
            get_object_vars($this)
        ];
    }
}
