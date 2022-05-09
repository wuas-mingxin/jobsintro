<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (!Auth::guard($guard)->check()) {
                return $guard == 'admin' ? redirect(route('admin.login')) : redirect('login');
            }
        }
        return $next($request);
    }

//    protected function redirectTo($request)
//    {
//
//        dd(route('admin.login'));
//        if (! $request->expectsJson()) {
//            return route('login');
//        }
//    }
}
