<?php

namespace App\Dtos\Room;

class CreateRoomDto
{
    public function __construct(
        public int $series,
        public string $course,
        public string $shift,
        public string $identification,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            series: $data['series'],
            course: $data['course'],
            shift: $data['shift'],
            identification: $data['identification'],
        );
    }

    public function toArray(): array
    {
        return [
            get_object_vars($this)
        ];
    }
}
