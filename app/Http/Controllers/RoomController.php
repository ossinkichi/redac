<?php

namespace App\Http\Controllers;

use App\Dtos\Room\CreateRoomDto;
use App\Exceptions\Exceptions;
use App\Http\Requests\Room\CreateRoomRequest;
use App\Http\Resources\ClassResource;
use App\Services\RoomService;
use Illuminate\Http\Resources\Json\JsonResource;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Throwable;

class RoomController extends Controller
{

    public function __construct(
        private readonly RoomService $service
    ) {}

    public function index(): JsonResource
    {
        try {
            return ClassResource::collection($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function show($id): JsonResource
    {
        try {
            return new JsonResource($this->service->find($id));
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function store(CreateRoomRequest $request): RedirectResponse
    {
        try {
            $dto = CreateRoomDto::make($request->toArray());
            $this->service->register($dto);

            return redirect()->route('secretary.rooms', $dto->course);
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function active(int $id)
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

    public function desactive(int $id)
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
