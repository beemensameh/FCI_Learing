<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class TestLogin
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
        $user = Auth::user();
        $type = $user['type'];
        if (($guard == 'student' && ($type == 'professor'||$type == 'affair')) || ($guard == 'web' && ($type == 'professor'||$type == 'student')) || ($guard == 'professor' && ($type == 'affair'||$type == 'student'))) {
            return redirect('/home');
        }

        return $next($request);
    }
}
