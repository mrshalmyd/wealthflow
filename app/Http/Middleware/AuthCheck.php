<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCheck
{
    /**
     * Middleware untuk mengecek apakah user sudah login.
     *
     * @param  \Illuminate\Http\Request  $request  Request yang masuk
     * @param  \Closure  $next  Callback untuk request berikutnya
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next)
    {
        // Jika session tidak punya 'user_id', redirect ke halaman login
        if (! $request->session()->has('user_id')) {
            return redirect('/login')
                ->withErrors(['msg' => 'Harus login dulu']);
        }

        // Jika sudah login, lanjutkan request ke proses berikutnya
        return $next($request);
    }
}
