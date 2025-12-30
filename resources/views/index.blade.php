<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Marshal Finance - Solusi Keuangan Cerdas, Aman, dan Mudah untuk Masa Depan Finansial Anda" />
  <title>Marshal Finance</title>

  <!-- Favicon -->
  <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/png" sizes="512x512">
  <link rel="apple-touch-icon" href="{{ asset('assets/favicon.png') }}" sizes="180x180">

  <!-- CSS -->
  <link rel="stylesheet" href="{{ asset('css/base.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">Marshal<span>Finance</span></div>

    <div class="nav-menu">
      <ul class="nav-links">
        <li><a href="#hero">Beranda</a></li>
        <li><a href="#fitur">Fitur</a></li>
        <li><a href="#stats">Statistik</a></li>
        <li><a href="{{ url('/login') }}" class="btn-nav">Masuk</a></li>
      </ul>
    </div>

    <div class="hamburger" onclick="toggleMenu()">
      <span></span><span></span><span></span>
    </div>
  </nav>

  <!-- Hero Section -->
  <header class="hero" id="hero">
    <div class="hero-content">
      <div class="hero-text">
        <h1>Masa Depan <span>Finansial</span> Anda</h1>
        <p class="subtitle">Kelola kekayaan dengan cerdas, investasi mudah, raih Financial Freedom lebih cepat</p>

        <div class="hero-buttons">
          <a href="{{ url('/signup') }}" class="btn primary">Mulai Gratis</a>
          <a href="{{ url('/login') }}" class="btn secondary">Lihat Demo</a>
        </div>

        <div class="trust-badges">
          <div class="badge">✓ Diawasi OJK</div>
          <div class="badge">✓ Keamanan Bank</div>
          <div class="badge">+999.999 Pengguna</div>
        </div>
      </div>

      <div class="hero-visual">
        <div class="card-float card-1">
          <div class="amount">Rp 9.99 T</div>
          <div class="label">Aset Terkelola</div>
        </div>
        <div class="card-float card-2">
          <div class="growth">+999%</div>
          <div class="label">Return 2025</div>
        </div>
      </div>
    </div>
  </header>

  <!-- Statistik -->
  <section class="stats section" id="stats">
    <div class="section-header"><h2>Angka Nyata</h2></div>
    <div class="stats-grid">
      <div class="stat-item">
        <div class="stat-number">9.99<span>/10</span></div>
        <div class="stat-label">Rating Pengguna</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">Rp 9.99T</div>
        <div class="stat-label">Aset Terkelola</div>
      </div>
      <div class="stat-item">
        <div class="stat-number">999%</div>
        <div class="stat-label">Kepuasan</div>
      </div>
    </div>
  </section>

  <!-- Fitur Utama -->
  <section class="section" id="fitur">
    <div class="section-header">
      <h2>Fitur Utama</h2>
      <p>Kelola keuangan Anda dengan mudah & aman</p>
    </div>
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">📊</div>
        <h3>Portfolio Tracker</h3>
        <p>Monitor semua aset real-time dalam satu tempat.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">🤖</div>
        <h3>Smart Invest</h3>
        <p>Rekomendasi AI sesuai profil risiko Anda.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">💰</div>
        <h3>Auto Invest</h3>
        <p>Round-up transaksi jadi investasi otomatis.</p>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <p>&copy; 2025 Marshal Finance. All rights reserved.</p>
    <p>Dibuat dengan ❤️ di Mars</p>
  </footer>

  <!-- JavaScript -->
  <script>
    function toggleMenu() {
      document.querySelector('.nav-menu').classList.toggle('active');
      document.querySelector('.hamburger').classList.toggle('active');
    }

    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
        document.querySelector('.nav-menu').classList.remove('active');
        document.querySelector('.hamburger').classList.remove('active');
      });
    });

    window.addEventListener('scroll', () => {
      document.querySelector('.navbar').classList.toggle('scrolled', window.scrollY > 60);
    });

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
      });
    });
  </script>

</body>
</html>
