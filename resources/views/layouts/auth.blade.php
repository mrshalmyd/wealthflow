<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marshal Finance</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">

    <!-- Hanya CSS yang dibutuhkan auth -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">

    <!-- Optional cache busting -->
    <!-- <link rel="stylesheet" href="{{ asset('css/auth.css') }}?v={{ time() }}"> -->
</head>
<body>
    @yield('content')
</body>
</html>