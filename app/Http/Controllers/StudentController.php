<?php

namespace App\Http\Controllers;

use Throwable;
use App\Exceptions\Exceptions;
use App\Services\StudentService;
use App\Dtos\Student\UpdateAllDataStudentDto;
use App\Dtos\Student\CreateStudentDto;
use App\Http\Resources\StudentResource;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Dtos\Student\UpdateSimpleDataOfStudentDto;
use App\Dtos\UpdateRoomOfStudentDto;
use App\Http\Requests\Student\UpdateAllDataStudentRequest;
use App\Http\Requests\Student\CreateStudentRequest;
use App\Http\Requests\Student\UpdateSimpleDataOfStudentRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateRoomOfStudentRequest;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{

    public function __construct(
        private readonly StudentService $service
    ) {}

    public function index(): JsonResource
    {
        try {
            return StudentResource::collection($this
                ->service
                ->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function show(string $cpf): JsonResource
    {
        try {
            return new StudentResource($this->service->find($cpf));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function filterCourseToEnterInRoom($course, $room)
    {
        try {
            return StudentResource::collection($this->service->findByCourseDoNotInToRoom($course, $room));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function filterCourse($course)
    {
        try {
            return StudentResource::collection($this->service->findByCourse($course));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateStudentRequest $request): Response
    {
        try {
            $dto = CreateStudentDto::make(($request->toArray()));

            $this->service->create($dto);

            return \redirect()->route('secretary.students.listing');
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function setRoom(UpdateRoomOfStudentRequest $request)
    {
        try {
            $dto = UpdateRoomOfStudentDto::make($request->validated());

            $this->service->roomUpdate($dto);

            return \redirect()->back();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function getRoom($course, $room)
    {
        try {
            return StudentResource::collection($this->service->findByRoom($course, $room));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function updateAllData(UpdateAllDataStudentRequest $request): Response
    {
        try {
            $dto = UpdateAllDataStudentDto::make($request->toArray());

            $this->service->update(
                $dto
            );

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function simpleUpdate(UpdateSimpleDataOfStudentRequest $request)
    {
        try {
            $dto = UpdateSimpleDataOfStudentDto::make($request->toArray());

            $this->service->SimpleUpdate(
                $dto
            );

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(string $cpf)
    {
        try {
            $this->service->updateStatus([
                'cpf' => $cpf,
                'is_active' => true,
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function desactive(string $cpf)
    {
        try {
            $this->service->updateStatus([
                'cpf' => $cpf,
                'is_active' => true,
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function formed(string $cpf)
    {
        try {
            $this->service->updateStatus([
                'cpf' => $cpf,
                'formed' => true,
            ]);

            return response()->noContent();
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
