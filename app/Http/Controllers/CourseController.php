<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Throwable;
use Illuminate\Http\Response;
use App\Exceptions\Exceptions;
use App\Services\CourseService;
use App\Dtos\Course\CreateCourseDto;
use App\Dtos\Course\UpdateCourseDto;
use App\Http\Resources\CourseResource;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests\Course\CreateCourseRequest;
use App\Http\Requests\Course\UpdateAllDataCourseRequest;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CourseController extends Controller
{
    public function __construct(
        private CourseService $service
    ) {
        $this->service = $service;
    }

    public function index(): JsonResource
    {
        try {
            return CourseResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function find(int $id): JsonResource
    {
        try {
            return new CourseResource($this->service->find($id));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateCourseRequest $request): RedirectResponse
    {
        try {
            $dto = CreateCourseDto::make($request->toArray());
            $this->service->register($dto);

            return \redirect()->route('secretary.home');
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function updateAllData(UpdateAllDataCourseRequest $request): Response
    {
        try {
            $dto = UpdateCourseDto::make($request->toArray());
            $this->service->update($dto);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(int $id): Response
    {
        try {
            $this->service->updateStatus([
                'id' => $id,
                'status' => true
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function desactive(int $id): Response
    {
        try {
            $this->service->updateStatus([
                'id' => $id,
                'status' => false
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
