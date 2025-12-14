<?php

namespace App\Dtos;

class UserCreateDto
{
    public string $user;
    public string $password;

    public function __construct(string $user, string $password)
    {
        $this->user = $user;
        $this->password = $password;
    }
}
