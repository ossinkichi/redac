<?php

namespace App\Services;

use App\Dtos\Course\CreateCourseDto;
use App\Dtos\Course\UpdateCourseDto;
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
        $response = $this->repository->find($id);

        !$response && new ModelNotFoundException('Curso não encontrada.');

        return $response;
    }

    public function register(CreateCourseDto $data): Course
    {
        $response = $this->repository->create($data->toArray());

        !$response->exists && new ModelNotFoundException('Não foi possivel registrar o curso');

        return $response;
    }

    public function update(UpdateCourseDto $dto): Course
    {
        $course = $this->repository->find($dto->id);

        !$course && new ModelNotFoundException('Curso não encontrado.');

        $course->update($dto->toArray());

        !$course->wasChanged() && new ModelNotFoundException('Nào foi possivel editar o curso');

        return $course;
    }

    public function updateStatus(array $data): Course
    {
        $course = $this->repository->find($data['id']);

        !$course && new ModelNotFoundException('Curso não encontrado.');

        $course->update($data);

        !$course->wasChanged() && new ModelNotFoundException('Nào foi possivel editar o curso');

        return $course;
    }
}
