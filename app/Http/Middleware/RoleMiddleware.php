<?php

namespace Social\Http\Middleware;
use Auth;
use Closure;

class RoleMiddleware
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
      if ($request->user()->hasRole('admin'))
        {
            return $next($request);
        }
        //return View("auth.login");
        //return "You dont have admin role to view the page";
        // Auth::logout();
            return $next($request);
        // return redirect('auth/login');
    }
}
