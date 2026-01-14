<?php

namespace App\Services;

use App\Dtos\ClassDto;
use App\Dtos\CourseDto;
use App\Dtos\NewStudentDto;
use App\Dtos\StudentDto;
use App\Exceptions\Exceptions;
use App\Repositories\ClassRepository;
use App\Repositories\CourseRepository;
use App\Repositories\StudentRepository;
use Throwable;

class StudentService
{

    private StudentRepository $studentRepository;
    private ClassRepository $classRepository;
    private CourseRepository $courseRepository;

    public function findStudent(string $studentCpf): array
    {
        try {
            $student = $this->studentRepository->findByCpf($studentCpf);
            $studentDto = $this->formarterDataStudent($student);

            return $studentDto->toJson();
        } catch (\Throwable $th) {
            return throw Exceptions::fromMessage($th);
        }
    }

    protected function getClassStudent(int $classId): ClassDto
    {
        return ClassDto::make(
            $this->classRepository->find($classId)->toArray()
        );
    }

    protected function getCourseStudent(int $courseId): CourseDto
    {
        return CourseDto::make(
            $this->courseRepository->find($courseId)->toArray()
        );
    }

    private function formarterDataStudent($student): StudentDto
    {
        $student['class_id'] = $this->getClassStudent($student['class_id'])->toJson();
        $student['course_id'] = $this->getClassStudent($student['course_id'])->toJson();

        return StudentDto::make($student);
    }

    public function newStudent(NewStudentDto $student): StudentDto
    {
        try {
            $response =  $this->studentRepository->create([
                'full_name' => $student->full_name,
                'registration' => $student->registration,
                'cpf' => $student->cpf,
                'gender' => $student->gender,
                'date_of_birth' => $student->date_of_birth,
                'address' => $student->address,
                'email' => $student->email,
                'phone_number' => $student->phone_number,
                'course_id' => $student->course_id,
                'class_id' => $student->class_id,
                'is_active' => $student->is_active,
                'formed' => $student->formed,
            ]);

            return $this->formarterDataStudent($response->toArray());
        } catch (Throwable $th) {
            return throw Exceptions::fromMessage($th);
        }
    }
}
