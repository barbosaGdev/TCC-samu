<?php

namespace App\Http\Middleware;

use Closure;

class authAdmin
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
        $loggedUser = \Auth::user();

        if($loggedUser['email'] != 'admin@samu.com' ){

            return redirect('/cursos');

        } 
            

        return $next($request);
    }
}
