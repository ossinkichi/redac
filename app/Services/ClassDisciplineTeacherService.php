<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ClassDisciplineTeacherRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClassDisciplineTeacherService
{

    public function __construct(
        private readonly  ClassDisciplineTeacherRepository $repository
    ) {}

    public function findAll()
    {
        return $this->repository->findAll();
    }

    public function findByClass(int $id)
    {
        $response = $this->repository->findByClass($id);

        !$response && throw new ModelNotFoundException('Não foi possivel fazer a busca.');

        return $response;
    }

    public function findByTeacher(int $id)
    {
        $response = $this->repository->findByClass($id);

        !$response && throw new ModelNotFoundException('Não foi possivel fazer a busca.');

        return $response;
    }

    public function register(array $data)
    {

        $response = $this->repository->create($data);

        !$response->exists && throw new ModelNotFoundException('Não foi possivel salvar a relaçào.');

        return $response;
    }

    // public function off(int $id)
    // {
    //     $response = $this->findByTeacher($id);

    //     !$response && new ModelNotFoundException('Não foi possivel desligar o professor(a) da Classe.');

    //     foreach ($$response->toArray() as $data) {
    //         $data->update([
    //             'status' => false
    //         ]);
    //     }
    // }

    // public function on(int $id)
    // {
    //     $response = $this->findByid($id);

    //     !$response && new ModelNotFoundException('Não foi possivel desligar o professor(a) da Classe.');

    //     $data->update([
    //         'status' => true
    //     ]);
    // }
}
