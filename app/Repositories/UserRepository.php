<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function newUser(array $data): User
    {
        return $this->model->create($data);
    }
}
