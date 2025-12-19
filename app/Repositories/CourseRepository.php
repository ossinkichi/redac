<?php

namespace App\Repositories;

use App\Dtos\CourseDto;
use App\Models\Course;

class CourseRepository
{

    public function find($courseId): Course
    {
        return Course::where('id', $courseId)->first();
    }
}
