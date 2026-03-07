<?php

namespace App\Http\Controllers;

use App\Exceptions\Exceptions;
use App\Services\SubjectService;
use App\Dtos\Subject\CreateSubjectDto;
use App\Dtos\Subject\UpdateSubjectDto;
use App\Http\Resources\SubjectResource;
use App\Http\Requests\Subject\CreateSubjectRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests\Subject\UpdateAllDataOfSubjectRequest;
use Illuminate\Http\RedirectResponse;

class SubjectController extends Controller
{

    public function __construct(
        private readonly SubjectService $service
    ) {}

    public function index(): JsonResource
    {
        try {
            return SubjectResource::collection($this->service->findAll());
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateSubjectRequest $request): RedirectResponse
    {
        try {
            $dto = CreateSubjectDto::make($request->toArray());
            $this->service->register($dto);

            return \redirect()->route('subject.register');
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function update(UpdateAllDataOfSubjectRequest $request): Response
    {
        try {
            $dto = UpdateSubjectDto::make($request->toArray());
            $this->service->update($dto);

            return \response()->noContent();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
