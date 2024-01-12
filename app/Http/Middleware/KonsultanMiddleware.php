<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KonsultanMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $user_role = auth()->user()->role->role;
            $cek_role = "konsultan";
            if ($cek_role == $user_role) {
                return $next($request);
            }
        } else {
            return redirect('/');
        }
    }
}
