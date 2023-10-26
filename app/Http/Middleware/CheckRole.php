<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        $user = $request->user();

        // Check if the user has at least one of the specified roles
        if ($user && $user->hasAnyRole($roles)) {
            return $next($request);
        }

        // If the user doesn't have the required roles, you can redirect or return an error response here.
        return abort(403, 'Unauthorized');
    }

}
