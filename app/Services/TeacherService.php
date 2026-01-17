<?php

namespace App\Services;

use App\Models\Teacher;
use App\Repositories\TeacherRepository;
use DomainException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class TeacherService
{

    private TeacherRepository $repository;

    public function __construct(TeacherRepository $repository)
    {
        $this->repository = $repository;
    }

    public function findAll(): Collection
    {
        $teachers = $this->repository->all();

        if ($teachers->isEmpty()) {
            throw new ModelNotFoundException("Nenhum professor encontrado.");
        }

        return $teachers;
    }

    public function find(string $cpf): ?Teacher
    {
        $teacher = $this->repository->findByCpf($cpf);

        if (!$teacher) {
            throw new ModelNotFoundException("Professor não encontrado.");
        }

        return $teacher;
    }

    public function create(array $data): ?Teacher
    {
        DB::transaction(function () use ($data, &$createdTeacher) {
            $createdTeacher = $this->repository->newTeacher($data);

            (!$createdTeacher instanceof Teacher || !$createdTeacher->exists) && throw new DomainException("Erro ao criar professor.");

            UserService::newUser([
                'user' => $data['cpf'],
                'password' => $data['date_of_birth'],
                'role' => 'teacher'
            ]);
        });


        return $createdTeacher;
    }

    public function update(array $data): Teacher
    {
        !$data['cpf'] && throw new \InvalidArgumentException("CPF é obrigatório para editar um professor.");

        $teacher = $this->find($data['cpf']);
        unset($data['cpf']);
        $teacher->update($data);

        !$teacher->wasChanged() && throw new \RuntimeException("Nenhum dado foi alterado.");

        return $teacher;
    }
}
