<?php

    namespace App\Http\Middleware;

    use Closure;
    use Illuminate\Support\Facades\Auth;

    class RedirectIfAuthenticated
    {
        public function handle($request, Closure $next, $guard = null)
        {
            if ($guard == "admin" && Auth::guard($guard)->check()) {
                return redirect('/admin/dashboard');
            }
            
            if ($guard == "web" && Auth::guard($guard)->check()) {
                return redirect()->route('home');
            }

            return $next($request);
        }
    }