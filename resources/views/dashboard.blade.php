@extends('layouts.app')

@section('content')
    <!-- Override konflik dari auth.css agar dashboard normal -->
    <style>
        body {
            background: #0a0a15 !important;          /* Dark navy untuk dashboard */
            display: block !important;               /* Hilangkan flex center */
            align-items: initial !important;
            justify-content: initial !important;
            min-height: 100vh !important;
            overflow-y: auto !important;             /* Pastikan scroll muncul */
        }

        main.dashboard-content {
            padding-top: 100px;                      /* Ruang untuk navbar fixed */
            min-height: calc(100vh - 180px);         /* Pastikan footer ke bawah */
        }

        footer.footer {
            position: relative;
            width: 100%;
            padding: 2rem 1rem;
            text-align: center;
            background: rgba(10, 10, 21, 0.95);
            border-top: 1px solid rgba(99, 102, 241, 0.2);
        }

        /* Hamburger clickable */
        .hamburger {
            cursor: pointer !important;
            pointer-events: auto !important;
            z-index: 1001 !important;
        }
    </style>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">Marshal<span>Finance</span></div>
        <div class="hamburger">
            <span></span><span></span><span></span>
        </div>
        <div class="nav-user">
            <span class="welcome">Halo, {{ session('username') ?? 'Pengguna' }} 👋</span>
            <a href="{{ route('logout') }}" class="btn-logout">Keluar</a>
        </div>
    </nav>

    <main class="dashboard-content">
        <!-- ... seluruh konten dashboard kamu tetap sama ... -->
    </main>
@endsection

@section('footer')
    <footer class="footer">
        <p>© 2025 Marshal Finance. All rights reserved.</p>
        <p>Dibuat dengan ❤️ di Mars</p>
    </footer>
@endsection