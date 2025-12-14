<?php

namespace App\Services;

use App\Repositories\ClassRepository;
use App\Repositories\CourseRepository;
use App\Repositories\StudentRepository;

class StudentService
{

    private StudentRepository $studentRepository;
    private ClassRepository $classRepository;
    private CourseRepository $courseRepository;

    public function findStudent(string $student)
    {
        $dataStudent = $this->studentRepository->findByCpf($student);
    }

    protected function getClassStudent($classId)
    {
        return $this->classRepository->find($classId);
    }

    protected function getCourseStudent($courseId)
    {
        return $this->courseRepository->find($courseId);
    }

    private function formarterDataStudent($dataStudent, $dataClass, $dataCourse)
    {
        return [
            'student' => $dataStudent,
            'class' => $dataClass,
            'course' => $dataCourse
        ];
    }
}
