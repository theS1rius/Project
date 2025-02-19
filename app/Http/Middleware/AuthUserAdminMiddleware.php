<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use App\Shop\Entity\User;

class AuthUserAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $is_allow_access = false;

        $user_id = session()->get('user_id');

        if (!is_null($user_id)) {
            $User = User::findOrFail($user_id);
            if ($User->type == 'A') {
                $is_allow_access = true;
            }
        }
        if (!$is_allow_access) {
            return redirect('/');
        }

        return $next($request);
    }
}
