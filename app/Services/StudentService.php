<?php

namespace App\Services;

use App\Models\Student;
use App\Repositories\ClassRepository;
use App\Repositories\StudentRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use RuntimeException;

class StudentService
{
    public function __construct(
        private StudentRepository $studentRepository,
        private ClassRepository $classRepository,
        private CourseService $courseService
    ) {
        $this->studentRepository = $studentRepository;
        $this->classRepository = $classRepository;
        $this->courseService = $courseService;
    }

    public function findAll(): Collection
    {
        $response = $this->studentRepository->findAll();

        if (!$response->empty()) {
            return  $response->map(function ($studens) {
                return $this->aditionalInfo($studens);
            });
        }
        return $response;
    }

    public function find(string $cpf): Student
    {
        $student = $this->studentRepository->findByCpf($cpf);

        !$student && throw new ModelNotFoundException('Estudante não encontrado');

        return $this->aditionalInfo($student);
    }

    private function aditionalInfo(Student $student): Student
    {
        $student['class_id'] = $this->classRepository->find($student['class_id']);
        $student['course_id'] = $this->courseService->find($student['course_id']);

        return $student;
    }

    public function create(array $student): ?Student
    {

        DB::transaction(function () use ($student, &$response) {

            $response =  $this->studentRepository->create($student);

            $response->exists() || throw new RuntimeException('Erro ao criar estudante.');

            UserService::newUser(
                [
                    'user' => $student['cpf'],
                    'password' => $student['date_of_birth'],
                    'role' => 'student',
                ]
            );
        });

        return $response;
    }

    public function update(array $data)
    {
        $student = $this->studentRepository->findByCpf($data['cpf']);

        !$student && throw new ModelNotFoundException('Estudante não encontrado');

        unset($data['cpf']);
        $student->update($data);

        !$student->wasChanged() && throw new RuntimeException('Nenhum dado foi alterado.');

        return $student;
    }
}
