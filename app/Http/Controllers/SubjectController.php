<?php

namespace App\Http\Controllers;

use App\Exceptions\Exceptions;
use App\Http\Requests\CreateSubjectRequest;
use App\Http\Requests\UpdateAllDataOfSubjectRequest;
use App\Http\Resources\SubjectResource;
use App\Services\SubjectService;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\Response;

class SubjectController extends Controller
{

    public function __construct(
        private SubjectService $service
    ) {}

    public function index(): JsonResource
    {
        try {
            return SubjectResource::collection($this->service->findAll());
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateSubjectRequest $request): Response
    {
        try {
            $this->service->register($request->toArray());

            return response()->noContent();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function update(UpdateAllDataOfSubjectRequest $request): Response
    {
        try {
            $this->service->update($request->toArray());

            return \response()->noContent();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }
}
