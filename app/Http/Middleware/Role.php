<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Closure;
use Illuminate\Http\Request;

class Role
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
//        if (auth()->user() && (auth()->user()->role_id === 1 ||
//                auth()->user()->role_id === 2)){
//            return redirect()->route('admin.index');
//        }
        return $next($request);
    }
}
