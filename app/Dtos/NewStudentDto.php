<?php

namespace App\Dtos;

class NewStudentDto
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
}
