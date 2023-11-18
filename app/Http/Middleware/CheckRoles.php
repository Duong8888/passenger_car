<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRoles
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        if (!Auth::check()) {
            return redirect('/login');
        }

        $userRoles = Auth::user()->roles->pluck('name')->toArray();

        foreach ($roles as $role) {
            if (in_array($role, $userRoles)) {
                return $next($request);
            }
        }

        return abort(403, 'Bạn không có quyền truy cập vào trang web này! Cảm ơn ^^ ');
    }
}
