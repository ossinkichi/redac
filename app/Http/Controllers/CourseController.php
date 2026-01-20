<?php

namespace App\Http\Controllers;

use App\Exceptions\Exceptions;
use App\Http\Resources\CourseResource;
use App\Services\CourseService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use PhpParser\Node\Expr\FuncCall;
use Throwable;

class CourseController extends Controller
{
    public function __construct(
        private CourseService $service
    ) {
        $this->service = $service;
    }

    public function findAll(): JsonResource
    {
        try {
            return CourseResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function find(int $id)
    {
        try {
            return new CourseResource($this->service->find($id));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function register()
    {
        try {
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function updateAllData()
    {
        try {
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
