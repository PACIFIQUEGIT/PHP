<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class Admin
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
        // Check if the user is authenticated
        if (Auth::check()) {
            // Check if the authenticated user is an admin
            if (auth()->user()->is_admin == 1) {
                return $next($request);
            }
}
   
        // Redirect to login with error message
        return redirect('/')->with('error', "Only admin can access!");
    }
}
