protected $routeMiddleware = [
    // middleware bawaan Laravel
    'auth' => \App\Http\Middleware\Authenticate::class,
    'verified' => \Illuminate\Auth\Middleware\EnsureEmailIsVerified::class,

    // middleware custom kamu
    'authcheck' => \App\Http\Middleware\AuthCheck::class,
];
