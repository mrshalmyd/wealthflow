<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marshal Finance</title>

    <!-- Google Fonts (wajib untuk Inter & Playfair Display) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png">

    <!-- Semua CSS (termasuk auth.css tetap di-load) -->
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <!-- Cache busting sementara (hapus ?v= setelah stabil) -->
    <!-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}?v={{ time() }}"> -->
</head>
<body>
    @yield('content')

    @yield('footer')

    <!-- Script hamburger & scroll effect (wajib untuk mobile) -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const hamburger = document.querySelector('.hamburger');
            const navUser = document.querySelector('.nav-user');

            if (hamburger && navUser) {
                hamburger.addEventListener('click', () => {
                    hamburger.classList.toggle('active');
                    navUser.classList.toggle('active');
                });
            }

            // Navbar shrink on scroll
            window.addEventListener('scroll', () => {
                document.querySelector('.navbar')?.classList.toggle('scrolled', window.scrollY > 50);
            });
        });
    </script>
</body>
</html>