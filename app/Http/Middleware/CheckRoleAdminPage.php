<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use Auth;

class CheckRoleAdminPage
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

        $passed = null;
        $route = explode('.', Route::currentRouteName());

        $roles = Auth::user()->rolesPages();
        foreach ($roles as $space) {

            if(trim($space->info['controller']) == $route[0]){
                $passed++;
            }
        }

        if(!$passed)
          abort(403, "No tienes autorización para ingresar.");

        return $next($request);
    }
}
