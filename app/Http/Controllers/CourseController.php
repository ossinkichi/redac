<?php

namespace App\Http\Controllers;

use App\Services\CourseService;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class CourseController extends Controller
{
    public function __construct(
        private CourseService $service
    ) {
        $this->service = $service;
    }

    public function findAll() {}

    public function find() {}

    public function register() {}

    public function updateAllData() {}
}
