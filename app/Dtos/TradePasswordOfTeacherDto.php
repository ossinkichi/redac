<?php

namespace App\Dtos;

class TradePasswordOfTeacherDto
{
    public function __construct(
        public string $cpf,
        public string $password,
    ) {}

    public static function make(array $data): self
    {
        return new self(
            cpf: $data['cpf'],
            password: $data['password'],
        );
    }

    public function toArray(): array
    {
        return [
            get_object_vars($this)
        ];
    }
}
