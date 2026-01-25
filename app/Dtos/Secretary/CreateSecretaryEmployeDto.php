<?php

namespace App\Dtos\Secretary;

class CreateSecretaryEmployeDto
{
    public function __construct(
        public string $full_name,
        public string $cpf,
        public string $gender,
        public string $date_of_birth,
        public string $email,
        public string $phone_number,
        public string $address,
        public bool $status = true,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            full_name: $data['full_name'],
            cpf: $data['cpf'],
            gender: $data['gender'],
            date_of_birth: $data['date_of_birth'],
            email: $data['email'],
            phone_number: $data['phone_number'],
            address: $data['address'],
            status: $data['status'] ?? true,
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
