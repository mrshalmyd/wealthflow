@extends('layouts.app')

@section('content')
<nav class="navbar">
  <div class="logo">Marshal<span>Finance</span></div>
  <div class="hamburger"><span></span><span></span><span></span></div>
  <div class="nav-user">
    <span class="welcome">Halo, {{ session('username') ?? 'Pengguna' }} 👋</span>
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
  <div style="text-align: center; color: #94a3b8; margin-top: 4rem;">
    <p>Fitur riwayat transaksi & grafik performa akan segera hadir!</p>
    <p style="margin-top: 1rem; font-size: 0.9rem;">
      &copy; 2025 Marshal Finance. All rights reserved.
    </p>
  </div>
</main>
@endsection
