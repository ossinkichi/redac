<?php

namespace App\Dtos;

class CreateCourseDto
{
    public function __construct(
        public string $name,
        public ?string $description = ''
    ) {}

    public static function make(array $data): self
    {
        return new self(
            name: $data['name'],
            description: $data['description'],
        );
    }

    public function toArray(): array
    {
        return [
            get_object_vars($this)
        ];
    }
}
