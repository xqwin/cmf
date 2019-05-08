<?php

namespace XQWIN\CMF\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class cmf
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
        if(!Auth::check()){
            return redirect(route('cmf.login'));
        }
        return $next($request);
    }
}
