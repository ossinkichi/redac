<?php

namespace App\Http\Controllers;

use App\Dtos\Course\CreateCourseSubjectDto;
use App\Http\Requests\Course\CreateCourseSubjectRequest;
use App\Http\Resources\CourseSubjectResource;
use App\Services\CourseSubjectService;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

class CourseSubjectController extends Controller
{

    public function __construct(
        private readonly CourseSubjectService $service
    ) {}

    public function index(): JsonResource
    {
        return CourseSubjectResource::collection($this->service->findAll());
    }

    public function store(CreateCourseSubjectRequest $request): Response
    {
        $dto = CreateCourseSubjectDto::make($request->toArray());

        $this->service->register($dto);

        return \response()->noContent();
    }

    public function destroy(int $id): Response
    {
        $this->service->delete($id);

        return \response()->noContent();
    }
}
