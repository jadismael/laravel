<?php

namespace App\Http\Middleware;

use App\Models\UserLogin;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            print_r(Auth::user()->id);
            exit;
            UserLogin::create(['user_id' => Auth::user()->id]);
            return redirect('/home');
        }

        return $next($request);
    }
}
