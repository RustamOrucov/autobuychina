<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Config;


class SetLocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $allowedLanguages = config('app.languages');
        $lang = $request->query('lang', config('app.locale'));

        if (!in_array($lang, $allowedLanguages)) {
            $lang = Config::get('app.fallback_locale');
        }

        app()->setLocale($lang);
        return $next($request);
    }
}
