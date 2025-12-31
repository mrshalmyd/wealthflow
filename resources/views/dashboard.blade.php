@extends('layouts.app')

@section('content')
<nav class="navbar">
    <!-- Logo -->
    <div class="logo">Marshal<span>Finance</span></div>

    <!-- Hamburger menu (mobile) -->
    <div class="hamburger">
        <span></span><span></span><span></span>
    </div>

    <!-- User navigation -->
    <div class="nav-user">
        <span class="welcome">
            Halo, {{ session('username') ?? 'Pengguna' }} 👋
        </span>
        <a href="{{ route('logout') }}" class="btn-logout">Keluar</a>
    </div>
</nav>

<main class="dashboard-content">
    <!-- Header -->
    <div class="dashboard-header">
        <h1>Dashboard Anda</h1>
        <p>Kelola keuangan dan investasi dengan cerdas & mudah</p>
    </div>

    <!-- Summary Cards -->
    <div class="summary-cards">
        <div class="card">
            <h3>Total Portofolio</h3>
            <div class="big-value">Rp 999 M</div>
            <p class="small-label">Nilai aset terkini</p>
        </div>

        <div class="card highlight">
            <h3>Return Tahun Ini</h3>
            <div class="big-value positive">+99.9%</div>
            <p class="small-label">Performa Year-to-Date (YTD)</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="quick-actions">
        <div class="action-buttons">
            <a href="#" class="action-btn">💰 Top Up Saldo</a>
            <a href="#" class="action-btn">📈 Investasi Baru</a>
            <a href="#" class="action-btn">💸 Tarik Dana</a>
        </div>
    </div>

    <!-- Info Tambahan -->
    <div class="dashboard-info">
        <p>Fitur riwayat transaksi & grafik performa akan segera hadir!</p>
    </div>
</main>
@endsection

@section('footer')
<footer class="footer">
    <p>&copy; 2025 Marshal Finance. All rights reserved.</p>
    <p>Dibuat dengan ❤️ di Mars</p>
</footer>
@endsection
