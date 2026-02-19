<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function loginView()
    {
        return view('login');
    }

    public function authenticateLogin(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();

            return match ($user->role) {
                'secretary' => redirect(route('secretary.home')),
                'stundent' => redirect(route('student.home')),
                'teacher' => redirect(route('teacher.home')),
                'admin' => redirect(route('admin.home')),
                default => redirect('/'),
            };
        }

        return back()->withErrors([
            'auth' => 'Usuario ou senha inválidos.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerate();

        return redirect('/');
    }
}
