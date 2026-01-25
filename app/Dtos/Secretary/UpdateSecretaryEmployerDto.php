<?php

namespace App\Dtos\Secretary;

class UpdateSecretaryEmployerDto
{
    public function __construct(
        public string $cpf,
        public string $full_name,
        public string $gender,
        public string $date_of_birth,
        public string $email,
        public string $phone_number,
        public string $address,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            cpf: $data['cpf'],
            full_name: $data['full_name'],
            gender: $data['gender'],
            date_of_birth: $data['date_of_birth'],
            email: $data['email'],
            phone_number: $data['phone_number'],
            address: $data['address'],
        );
    }

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
