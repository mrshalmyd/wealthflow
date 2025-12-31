<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marshal Finance</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>
    <!-- Navbar bisa ditaruh di sini kalau mau global -->

    <main>
        @yield('content')
    </main>

    <!-- Footer opsional -->
    @yield('footer')
</body>
</html>
