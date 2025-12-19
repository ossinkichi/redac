<?php

namespace App\Repositories;

use App\Models\User;
use Throwable;

class UserRepository
{
    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    public function newUser(array $data): array
    {
        try {
            $this->model->create($data);
            return [
                'status' => '201',
                'message' => ''
            ];
        } catch (Throwable $th) {
            return [
                'status' => '500',
                'message' => $th
            ];
        }
    }
}
