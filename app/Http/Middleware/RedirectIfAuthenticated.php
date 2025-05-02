<?php

namespace App\Http\Middleware;

use App\Models\Role;  // Make sure to import the Role model
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        // If no guards are passed, use the default null guard
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Retrieve the role of the authenticated user
                $role = Role::find(auth()->user()->role_id);

                // If the role exists, redirect to the URL associated with the role
                if ($role) {
                    return redirect($role->url);  // Ensure 'url' is a field in your 'roles' table
                }
            }
        }

        // If no redirection happens, proceed with the request
        return $next($request);
    }
}
