<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PortfolioAccessMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        \Log::info('Portfolio projects page accessed.');

        return $next($request);
    }
}