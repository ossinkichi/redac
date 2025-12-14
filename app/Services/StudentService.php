<?php

namespace App\Services;

use App\Dtos\StudentDto;
use App\Models\Course;
use App\Repositories\ClassRepository;
use App\Repositories\CourseRepository;
use App\Repositories\StudentRepository;

class StudentService
{

    private StudentRepository $studentRepository;
    private ClassRepository $classRepository;
    private CourseRepository $courseRepository;

    public function findStudent(string $studentCpf)
    {
        $student = $this->studentRepository->findByCpf($studentCpf);
        $studentDto = $this->formarterDataStudent($student);

        return $studentDto->toJson();
    }

    protected function getClassStudent(int $classId)
    {
        return $this->classRepository->find($classId);
    }

    protected function getCourseStudent(int $courseId)
    {
        return $this->courseRepository->find($courseId);
    }

    private function formarterDataStudent($student): StudentDto
    {
        $student['class_id'] = $this->getClassStudent($student['class_id'])->toJson();
        $student['course_id'] = $this->getClassStudent($student['course_id'])->toJson();

        return StudentDto::make($student);
    }
}
