<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class ApiAuthenticate
{
    public function handle($request, Closure $next)
    {
        if (!Auth::user()) {
            return response('', 401);
        }
        // return response()->json(['hi'=>1]);

        return $next($request);
    }

}
