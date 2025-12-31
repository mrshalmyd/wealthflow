<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

/**
 * Konfigurasi utama aplikasi Laravel.
 * Mengatur base path, routing, middleware, dan exception handler.
 */
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        // Routing untuk web dan console
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up', // endpoint health check
    )
    ->withMiddleware(function (Middleware $middleware) {
        /**
         * Registrasi alias middleware.
         * Middleware bisa dipanggil dengan nama alias di route.
         */
        $middleware->alias([
            'authcheck' => \App\Http\Middleware\AuthCheck::class,
            // Tambahkan alias lain jika diperlukan
            // 'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);

        /**
         * Opsional: menambahkan middleware ke group tertentu.
         * Contoh: menambahkan 'authcheck' ke group 'web'.
         */
        // $middleware->appendToGroup('web', 'authcheck');
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Tempat untuk konfigurasi custom exception handler
    })
    ->create();
