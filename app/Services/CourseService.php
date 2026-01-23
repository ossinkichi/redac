<?php

namespace App\Services;

use App\Models\Course;
use App\Repositories\CourseRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Collection;

class CourseService
{

    public function __construct(
        private CourseRepository $repository
    ) {
        $this->repository = $repository;
    }

    public function findAll(): Collection
    {
        return $this->repository->findAll();
    }

    public function find(int $id): Course
    {
        return $this->repository->find($id);
    }

    public function register(array $data): Course
    {
        $response = $this->repository->create($data);

        !$response->exists && new ModelNotFoundException('Não foi possivel registrar o curso');

        return $response;
    }

    public function update(array $data): Course
    {
        $course = $this->find($data['id']);

        !$course && new ModelNotFoundException('Curso não encontrado.');

        unset($data['id']);
        $course->update($data);

        !$course->wasChanged() && new ModelNotFoundException('Nào foi possivel editar o curso');

        return $course;
    }
}
