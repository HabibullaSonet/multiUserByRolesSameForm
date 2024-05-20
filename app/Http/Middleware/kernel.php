<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class kernel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return $next($request);
    }

    protected $middlewareAliases = [
        'auth' => \App\Http\Middleware\Authenticate::class,
        'adminAuth' => \App\Http\Middleware\AdminAuth::class,
        'superAdminAuth' => \App\Http\Middleware\SuperAdminAuth::class,
    ];
}
