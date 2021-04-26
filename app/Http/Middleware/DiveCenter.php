<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DiveCenter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user() && $request->user()->id_role != 2)
        {
            return response()->json(['message' => 'Not Found!'], 404);
        }
        return $next($request);
    }
}
