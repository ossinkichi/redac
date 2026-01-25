<?php

namespace App\Services;

use App\Dtos\Teacher\CreateTeacherDto;
use App\Dtos\Teacher\UpdateAllDataOfTeacherDto;
use App\Dtos\Teacher\UpdateSimpleDataOfTeacherDto;
use App\Models\Teacher;
use App\Repositories\SubjectRepository;
use App\Repositories\TeacherRepository;
use DomainException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class TeacherService
{

    public function __construct(
        private TeacherRepository $repository,
        private SubjectRepository $subjectRepository
    ) {}

    public function findAll(): Collection
    {
        $teachers = $this->repository->all();

        if ($teachers->isEmpty()) {
            throw new ModelNotFoundException("Nenhum professor encontrado.");
        }

        $teachers->map(fn($teacher) => $teacher['discipline_specializate'] = $this->aditionalInfo($teacher['discipline_specializate']));

        return $teachers;
    }

    public function find(string $cpf): ?Teacher
    {
        $teacher = $this->repository->findByCpf($cpf);

        !$teacher && throw new ModelNotFoundException("Professor não encontrado.");

        $teacher['discipline_specializate'] = $this->aditionalInfo($teacher['discipline_specializate']);

        return $teacher;
    }

    private function aditionalInfo(int $subject)
    {
        return $this->subjectRepository->find($subject);
    }

    public function create(CreateTeacherDto $data): ?Teacher
    {
        return DB::transaction(function () use ($data, &$createdTeacher) {
            $createdTeacher = $this->repository->newTeacher($data->toArray());

            (!$createdTeacher instanceof Teacher || !$createdTeacher->exists) && throw new DomainException("Erro ao criar professor.");

            UserService::newUser([
                'user' => $data->cpf,
                'password' => $data->date_of_birth,
                'role' => 'teacher'
            ]);
        });
    }

    public function update(UpdateAllDataOfTeacherDto $data): Teacher
    {
        !$data['cpf'] && throw new \InvalidArgumentException("CPF é obrigatório para editar um professor.");

        $teacher = $this->find($data->cpf);

        !$teacher && throw new ModelNotFoundException("Professor não encontrado.");

        $teacher->update($data->toArray());

        !$teacher->wasChanged() && throw new \RuntimeException("Nenhum dado foi alterado.");

        return $teacher;
    }

    public function simpleUpdate(UpdateSimpleDataOfTeacherDto $data): Teacher
    {
        !$data['cpf'] && throw new \InvalidArgumentException("CPF é obrigatório para editar um professor.");

        $teacher = $this->find($data->cpf);

        !$teacher && throw new ModelNotFoundException("Professor não encontrado.");

        $teacher->update($data->toArray());

        !$teacher->wasChanged() && throw new \RuntimeException("Nenhum dado foi alterado.");

        return $teacher;
    }

    public function updateStatus(array $data): Teacher
    {
        !$data['cpf'] && throw new \InvalidArgumentException("CPF é obrigatório para editar um professor.");

        $teacher = $this->find($data['cpf']);

        !$teacher && throw new ModelNotFoundException("Professor não encontrado.");

        $teacher->update($data);

        !$teacher->wasChanged() && throw new \RuntimeException("Nenhum dado foi alterado.");

        return $teacher;
    }
}
