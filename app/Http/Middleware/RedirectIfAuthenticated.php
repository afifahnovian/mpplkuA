<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        switch($guard){
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin-dashboard');
                } 
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('user-dashboard');
                } 
                break;


        }
        // if (! Auth::guard('admin')->check()) {
        //     return redirect('/admin/login');
        // } else if (! Auth::guard('users')->check()) {
        //     return redirect('/login');
        // }
        return $next($request);
    }
}