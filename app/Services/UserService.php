<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{

    private UserRepository $userRepository;

    public function __construct()
    {
        $userRepository = new UserRepository;
    }

    public function newUser($user)
    {
        $this->userRepository->newUser($user);
    }
}
