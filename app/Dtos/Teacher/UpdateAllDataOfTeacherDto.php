<?php

namespace App\Dtos\Teacher;

class UpdateAllDataOfTeacherDto
{
    public function __construct(
        public string $full_name,
        public string $cpf,
        public string $gender,
        public string $date_of_birth,
        public string $address,
        public string $email,
        public string $phone_number,
        public int $specialization_subject_id,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            full_name: $data['full_name'],
            cpf: $data['cpf'],
            gender: $data['gender'],
            date_of_birth: $data['date_of_birth'],
            address: $data['address'],
            email: $data['email'],
            phone_number: $data['phone_number'],
            specialization_subject_id: $data['specialization_subject_id'],
        );
    }

    public function toArray(): array
    {
        return \get_object_vars($this);
    }
}
