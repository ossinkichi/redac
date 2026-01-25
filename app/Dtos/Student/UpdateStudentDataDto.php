<?php

namespace App\Dtos\Student;

class UpdateStudentDataDto
{
    public function __construct(
        public string $full_name,
        public string $gender,
        public string $date_of_birth,
        public string $address,
        public string $email,
        public ?string $phone_number,
        public array $course,
        public array $class,
        public bool $is_active,
        public bool $formed,
    ) {}


    public static function make(array $data): self
    {
        return new self(
            full_name: $data['full_name'],
            gender: $data['gender'],
            date_of_birth: $data['date_of_birth'],
            address: $data['address'],
            email: $data['email'],
            phone_number: $data['phone_number'],
            course: $data['course'],
            class: $data['class'],
            is_active: $data['is_active'],
            formed: $data['formed'],
        );
    }

    public function toArray(): array
    {
        return [
            get_object_vars($this)
        ];
    }
}
