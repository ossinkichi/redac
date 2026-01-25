<?php

namespace App\Dtos\Course;

class UpdateCourseDto
{
    public function __construct(
        public int $id,
        public string $name,
        public ?string $description
    ) {}

    public static function make(array $data): self
    {
        return new self(
            id: $data['id'],
            name: $data['name'],
            description: $data['description'],
        );
    }

    public function toArray(): array
    {
        $data = \get_object_vars($this);
        unset($data['id']);
        return $data;
    }
}
