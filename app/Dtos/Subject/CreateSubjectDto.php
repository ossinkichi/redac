<?php

namespace App\Dtos\Subject;

class CreateSubjectDto
{
    public function __construct(
        public string $name,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            name: $data['name'],
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
