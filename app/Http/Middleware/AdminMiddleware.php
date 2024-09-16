<?php

namespace App\Http\Middleware;

use App\Enums\Guards;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $routeName = $request->route()->getName();

        // Eğer admin giriş yapmışsa ve şu anda 'admin.login-view' rotasında ise home rotasına yönlendir
        if (auth()->guard(Guards::ADMIN->value)->check() && $routeName === 'admin.login-view') {
            return redirect()->route('home');
        }

        // Giriş yapmamışsa giriş sayfasına yönlendir
        if (!auth()->guard(Guards::ADMIN->value)->check()) {
            return redirect()->route('admin.login-view');
        }

        return $next($request);
    }
}
