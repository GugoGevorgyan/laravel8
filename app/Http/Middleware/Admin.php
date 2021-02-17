<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        if(auth()->user() && (auth()->user()->role_id === 1 ||
            auth()->user()->role_id === 2) ){
            return $next($request);
        }
        return redirect()->route('admin/login')->with(['message' => 'oypss ! you are not the  admin']);

    }
}
