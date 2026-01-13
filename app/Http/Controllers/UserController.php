<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function loginView()
    {
        return view('login');
    }
    public function authenticateLogin(LoginRequest $request)
    {
        $credentials = $request->only('user', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return \back()->withErrors([
            'user' => 'Usuario ou senha inválidos.',
        ])->withInput();
    }

    public function registerView()
    {
        return view('register');
    }

    public function register(array $data)
    {
        $response = UserService::newUser($data);

        return $response;
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerate();

        return redirect('/');
    }
}
