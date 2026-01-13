<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class LogRequestMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $userAgent=$request->header('User-Agent');
        
        Log::info('Request User-Agent', [
            'user-agent' => $userAgent,
            'ip' => $request->ip(),
            'path' => $request->path(),
            'method' => $request->method(),
            'user_id' => optional($request->user())->id,
        ]);
        
        return $next($request);
    }
}
