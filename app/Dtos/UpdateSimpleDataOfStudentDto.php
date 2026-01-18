<?php
namespace App\Dtos;

class UpdateSimpleDataOfStudentDto
{
    public function __construct(
        // Define your DTO properties here
    ) {}

    public static function make(array $data): self
    {
        return new self(
            // Map array data to DTO properties here
        );
    }

    public function toArray(): array
    {
        return [
            get_object_vars($this)
        ];
    }
}