<?php

namespace App\Services;

use App\Dtos\CreateActivityDto;
use App\Repositories\ActivityRepository;

class ActivityService
{

    public function __construct(
        private readonly ActivityRepository $repository
    ) {}

    public function create(CreateActivityDto $dto) {}

    public function find() {}
}
