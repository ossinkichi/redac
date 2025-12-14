<?php

namespace App\Repositories;

use App\Dtos\CourseDto;
use App\Models\Course;

class CourseRepository
{

    public function find($courseId): CourseDto
    {
        $course = Course::where('id', $courseId)->first()->toArray();

        return CourseDto::make($course);
    }
}
