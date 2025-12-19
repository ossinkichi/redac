<?php

namespace App\Dtos;

class NewCouse
{

    public function __construct(
        public string $name,
        public string $description
    ) {}
}
