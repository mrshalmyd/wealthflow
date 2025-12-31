<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // ← Tambahkan di sini
        $middleware->alias([
            'authcheck' => \App\Http\Middleware\AuthCheck::class,
            // tambahkan alias lain jika perlu
            // 'admin'     => \App\Http\Middleware\AdminMiddleware::class,
        ]);

        // optional: jika ingin menambah ke group tertentu
        // $middleware->appendToGroup('web', 'authcheck');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();