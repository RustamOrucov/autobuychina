<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;
use function Laravel\Prompts\alert;

class RedirectUnauthorized
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            alert('Pages Not Found');
            sleep(3);
            return response(view('front.welcome'))->header('Refresh', '1;url=https://jugaad.az/az');
        }
        sleep(3);
        return response(view('front.welcome'))->header('Refresh', '1;url=https://jugaad.az/az');
    }
}
