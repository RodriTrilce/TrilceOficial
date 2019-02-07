<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;
use App\Models\Admin\AdminPageModel;
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

/*
        $c = Auth::user()->roles()->adminPages();
        dd($c);
*/

/*
        $route = explode('.', Route::currentRouteName());
        $route = $route[0];

        $c = Auth::user()->roles;
        foreach ($c as $key) {
            $id = $key->id;
            $v = AdminPageModel::where('role_id', $id);
            
            dd($v);

        }

        die;


/*
        echo Route::currentRouteName();
        echo "<br>\n";

        dd($request->User()->roles);

        die;
*/        
        return $next($request);
    }
}
