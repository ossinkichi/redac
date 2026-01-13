<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureIsSecretary
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
            return \redirect()->route('login.page')->with('error', 'Sem permissão para prosseguir!');
        }

        if ($user->role !== 'secretary') {
            return \abort(403, 'Sem permissão para prosseguir!');
        }

        return $next($request);
    }
}
