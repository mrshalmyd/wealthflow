<?php

namespace app\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('user_id')) {
            return redirect('/login')->withErrors(['msg' => 'Harus login dulu']);
        }
        return $next($request);
    }
}
