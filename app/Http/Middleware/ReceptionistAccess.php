<?php

namespace App\Http\Middleware;

use Closure;

class ReceptionistAccess
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
        if(auth()->user()->role=="receptionist" || auth()->user()->role=="admin")
            return $next($request);

        return redirect()->back()->with('Error','Sorry you are not allowed to perform this action.');
    }
}
