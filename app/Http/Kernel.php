protected $routeMiddleware = [
    'authcheck' => \App\Http\Middleware\AuthCheck::class,
];

protected $middlewareGroups = [
    'web' => [
        // middleware bawaan
        \App\Http\Middleware\AuthCheck::class,
    ],
];
