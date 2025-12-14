<?php

namespace App\Dtos;

use DateTime;

class StudentDto
{

    public function __construct(
        public string $full_name,
        public int $registration,
        public string $cpf,
        public string $gender,
        public string $date_of_birth,
        public string $address,
        public string $email,
        public ?string $phone_number,
        public array $course,
        public array $class,
        public bool $is_active,
        public bool $formed,
        public DateTime $created_at,
        public DateTime $updated_at
    ) {}

    public static function make(array $student): self
    {
        return new self(
            full_name: $student['full_name'],
            registration: $student['registration'],
            cpf: $student['cpf'],
            gender: $student['gender'],
            date_of_birth: $student['date_of_birth'],
            address: $student['address'],
            email: $student['email'],
            phone_number: $student['phone_number'] ?? null,
            course: $student['course_id'],
            class: $student['class_id'],
            is_active: $student['is_active'],
            formed: $student['formed'],
            created_at: new DateTime($student['created_at']),
            updated_at: new DateTime($student['updated_at'])
        );
    }

    public function toJson(): array
    {
        return \get_object_vars($this);
    }
}
