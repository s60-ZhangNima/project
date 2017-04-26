<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class Rbac
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

        $id=Auth::user()->id;

        $route = Route::current()->uri();


        $user = User::find($id);
        dump($id);
        dump($user->name);
        dump($user->can($route));
            /*if (!$user->can($route)){
                return back();
            }*/
       return $next($request);
    }
}
