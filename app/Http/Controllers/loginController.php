<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginRequest;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    private function authenticate(loginRequest $request) {}
}
