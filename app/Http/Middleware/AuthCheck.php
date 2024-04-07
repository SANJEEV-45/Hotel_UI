<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Session::exists(Session::getId('user_info'))) {
        //     return redirect('/login');
        // }

        // if (!auth()->check()) {
        //     // User is logged in, continue with the request
        //     // return dd(auth()->check());
        //     return redirect()->route('auth-login');
        // }
        // return redirect()->route('welcome');
        return $next($request);
    }
}
