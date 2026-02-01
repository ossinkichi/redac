<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsTeacher
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user) {
            return \abort(403, 'Sem permissão para prosseguir!');
        }

        if ($user->role !== 'teacher') {
            return \abort(403, 'Sem permissão para prosseguir!');
        }

        return $next($request);
    }
}
