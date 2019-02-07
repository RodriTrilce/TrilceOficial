<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

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




        echo Route::currentRouteName();
        echo "<br>\n";

        dd($request->User()->roles);

        die;
        return $next($request);
    }
}
