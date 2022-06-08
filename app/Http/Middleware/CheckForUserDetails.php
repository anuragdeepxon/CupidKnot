<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckForUserDetails
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // $user = $request->user();
        // if ($user) {
        //     if (($user->dob == null) || ($user->gender == null) || ($user->annual_income == null)) {
        //         // return redirect('http://127.0.0.1:8000/user/profile');
        //     }
        // }
        return $next($request);
    }
}
