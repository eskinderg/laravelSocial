<?php

namespace Social\Http\Middleware;

use Closure;

class funMiddle
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
        //return redirect('/authors');
        return $next($request);
    }
}
