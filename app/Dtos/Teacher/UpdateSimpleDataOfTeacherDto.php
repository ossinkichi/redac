<?php

namespace App\Dtos\Teacher;

class UpdateSimpleDataOfTeacherDto
{
    public function __construct(
        public string $cpf,
        public string $full_name,
        public string $email,
        public string $phone_number,
        public string $address,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            cpf: $data['cpf'],
            full_name: $data['full_name'],
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
