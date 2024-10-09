<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DetectMobileDevice
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $userAgent = $request->header('User-Agent');

        if ($this->isMobile($userAgent)) {
            // Mobil cihaza yönlendirme yap
            return redirect()->route('mobile.home');
        }

        return $next($request);
    }

    /**
     * User-Agent'ten mobil cihazı tespit eder.
     *
     * @param string $userAgent
     * @return bool
     */
    protected function isMobile(string $userAgent): bool
    {
        return preg_match('/(android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini)/i', $userAgent);
    }
}
