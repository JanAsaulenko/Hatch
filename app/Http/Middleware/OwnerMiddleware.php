<?php

namespace App\Http\Middleware;

use Closure;

class OwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role){
        if (!$request->user()->hasRole($admin)) {
            return redirect('/admin');
        }
        else if (!$request->user()->hasRole($moder)) {
            return redirect('/moders');
        }
        return $next($request);
    }
}
