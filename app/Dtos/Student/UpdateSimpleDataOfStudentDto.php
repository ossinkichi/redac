<?php

namespace App\Dtos\Student;

class UpdateSimpleDataOfStudentDto
{
    public function __construct(
        public int $cpf,
        public string $full_name,
        public string $registration,
        public string $gender,
        public string $date_of_birth,
        public string $address,
        public string $email,
        public ?string $phone_number = '',
    ) {}

    public static function make(array $data): self
    {
        return new self(
            cpf: $data['cpf'],
            full_name: $data['full_name'],
            registration: $data['registration'],
            gender: $data['gender'],
            date_of_birth: $data['date_of_birth'],
            address: $data['address'],
            email: $data['email'],
            phone_number: $data['phone_number'] ?? '',
        );
    }

    public function toArray(): array
    {
        return [
            get_object_vars($this)
        ];
    }
}
