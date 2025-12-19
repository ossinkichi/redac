<?php

namespace App\Repositories;

use App\Models\ClassModel;

class ClassRepository
{

    public function find($classId): ClassModel
    {
        return ClassModel::where('id', $classId)->first();
    }
}
