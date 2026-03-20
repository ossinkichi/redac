<?php

namespace App\Http\Controllers;

use App\Dtos\CreateActivityDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\CreateActivityRequest;
use App\Http\Resources\ActivityResouce;
use App\Services\ActivityService;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function __construct(
        private readonly ActivityService $service
    ) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateActivityRequest $request)
    {
        try {
            $dto = CreateActivityDto::make($request->validated());

            $this->service->create($dto);

            return \redirect()->back();
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        try {
            $activity = $this->service->find();

            return new ActivityResouce($activity);
        } catch (\Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($resource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $resource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($resource)
    {
        //
    }
}
