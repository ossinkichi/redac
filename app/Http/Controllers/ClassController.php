<?php

namespace App\Http\Controllers;

use App\Exceptions\Exceptions;
use App\Services\ClassService;
use Illuminate\Http\Request;
use Throwable;

class ClassController extends Controller
{

    public function __construct(
        private ClassService $service
    ) {
        $this->service = $service;
    }
    public function findAll()
    {
        try {
            return ($this->service->findAll());
        } catch (Throwable $th) {
            throw Exceptions::fromMessage($th);
        }
    }

    public function find()
    {
        try {
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
