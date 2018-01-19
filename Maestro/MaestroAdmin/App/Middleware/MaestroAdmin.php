<?php

namespace Maestro\MaestroAdmin\App\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Maestro\MaestroAdmin\App\Models\UserAdmin;

class MaestroAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->guest()) {

            if ($request->ajax() || $request->wantsJson()) {

                return response('Unauthorized.', 401);

            } else {

                return redirect()->guest('login');

            }

        }

        $authUserId = Auth::User()->id;

        if ( isset(UserAdmin::find($authUserId)->roles[0]['role']) == 'admin') {

            return $next($request);

        } else {
            return response('Access denied.', 401);
        }



    }
}
