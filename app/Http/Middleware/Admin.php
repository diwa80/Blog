<?php

namespace App\Http\Middleware;
namespace App\Http\Controllers\Auth;

use Closure;
use Session;

class Admin
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
        if(Auth::user()->admin)
        {
            return redirect()->back();
        }
        return $next($request);
    }
}
