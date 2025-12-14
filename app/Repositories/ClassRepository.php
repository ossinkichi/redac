<?php

namespace App\Repositories;

use App\Dtos\ClassDto;
use App\Models\ClassModel;

class ClassRepository
{

    public function find($classId): ClassDto
    {
        $class = ClassModel::where('id', $classId)->first()->toArray();

        return ClassDto::make($class);
    }
}
