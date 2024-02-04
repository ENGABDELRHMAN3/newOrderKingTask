<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $role = auth()->user()->role;
        if($role !== 1){
            switch ($role) {
                case '2':
                    return redirect(RouteServiceProvider::ADMINHOME);
                case '3':
                    return redirect(RouteServiceProvider::HOME);
                default:
                return redirect(RouteServiceProvider::HOME);
            }
        }
        return $next($request);
    }
}
