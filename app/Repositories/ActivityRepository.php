<?php

namespace App\Repositories;

use App\Models\Activity;

class ActivityRepository
{
    public function __construct(
        private readonly Activity $model
    ) {}


    public function create(array $activity)
    {
        return $this->model->create($activity);
    }

    public function findAll() {}
    public function findOfTeacher() {}
    public function findOfRoom() {}
}
