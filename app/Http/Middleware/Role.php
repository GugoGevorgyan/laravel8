<?php

namespace App\Http\Middleware;

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
        // print_r(auth()->user()->role_id);
        if (auth()->user() && auth()->user()->role_id !== 2){
//            return redirect(HomeController::index);
//            return route('login');
        }
        return redirect(url('/admin/login'))->with(['message' => 'oypss ! you are not the  admin']);
    }
}
