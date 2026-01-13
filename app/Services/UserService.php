<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{

    public static function newUser($user)
    {
        UserRepository::newUser($user);
    }
}
