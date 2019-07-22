<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class AccountMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::get('Admin_login')){
            return $next($request);

        }else {
            return redirect()->route('login');
        }
    }
}
