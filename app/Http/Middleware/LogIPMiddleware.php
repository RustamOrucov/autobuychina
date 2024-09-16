<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogIPMiddleware
{
    public function handle($request, Closure $next)
    {
        $ipAddress = $request->ip();

        // IP adresini logla
        Log::info('IP Adresi: ' . $ipAddress);

        return $next($request);
    }
}
