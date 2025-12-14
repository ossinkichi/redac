<?php

namespace App\Dtos;

class NewSrudentDto
{

    public function __construct(
        public string $full_name,
        public string $registration,
        public string $cpf,
        public string $gender,
        public string $date_of_birth,
        public string $address,
        public string $email,
        public ?string $phone_number = '',
        public int $course_id,
        public int $class_id,
        public ?bool $is_active = false,
        public ?bool $formed = false
    ) {}

    public static function make(array $data): self
    {
        return new self(
            full_name: $data['full_name'],
            registration: $data['registration'],
            cpf: $data['cpf'],
            gender: $data['gender'],
            date_of_birth: $data['date_of_birth'],
            address: $data['address'],
            email: $data['email'],
            phone_number: $data['phone_number'] ?? '',
            course_id: $data['course_id'],
            class_id: $data['class_id'],
            is_active: $data['is_active'] ?? false,
            formed: $data['formed'] ?? false
        );
    }
}
