<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPolite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $pleaseExists = $request->exists('please');
        if ($pleaseExists) {
            return $next($request);
        } else {
            return response("You must say the magic word.");
        }
    }
}
