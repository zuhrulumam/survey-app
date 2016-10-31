<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Aacotroneo\Saml2\Facades\Saml2Auth as Saml2;
use Illuminate\Support\Facades\URL;

class Authenticate {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null) {
        if (auth($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return Saml2::login(URL::full());
                //return redirect()->guest('auth/login');
            }
        }
//        if (Auth::guard($guard)->guest()) {
//            if ($request->ajax() || $request->wantsJson()) {
//                return response('Unauthorized.', 401);
//            }
//
//            return \Redirect::to("http://internet.uns.ac.id");
//        }

        return $next($request);
    }

}
