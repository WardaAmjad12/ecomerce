<?php

namespace App\Http\Middleware;
use App\Role;
use Closure;
use Auth;
class AdminAuthenticated
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
        if (Auth::User()->role->name =='customer') {
            return redirect('/home')->with('message','You are not allowed to access');
        }
        return $next($request);
    }
}
