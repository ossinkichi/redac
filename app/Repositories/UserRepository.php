<?php

namespace App\Repositories;

use App\Models\User;
use Throwable;

class UserRepository
{

    public static function newUser(array $data): array
    {
        try {
            User::create($data);
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
