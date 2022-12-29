<?php

namespace App\Http\Middleware;

use App\Setting\Setting_Static;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->session()->exists(Setting_Static::KEY.'-admin') ){
            return $next($request);
        }
        else{
            return Redirect::route('login-admin')->with('error', Setting_Static::ERROR_SESSION_LOGIN);
        }
    }
}
