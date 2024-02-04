<?php

namespace App\Http\Middleware;

use App\Models\SuperAdmin\Tenants;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TenantMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();  
        $tanant = Tenants::where('domain',$host)->firstOrFail();
        $tanant->SuperAdmin == 1 ? $request->SuperAdmin= 1 :$request->SuperAdmin =0 ;
        $request->ApiKey = $tanant->ApiKey;
        return $next($request);
    }
}
