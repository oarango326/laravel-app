<?php

namespace App\Http\Middleware;

use Closure;

class creaNuevaVisita
{
    /**s
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(true){
            return $next($request);        
        }

        return response('error en token',404);
    }
}
