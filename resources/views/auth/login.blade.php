@extends('layouts.auth')

@section('content')
<div class="auth-container minimal">
    <!-- Logo aplikasi -->
    <div class="auth-logo">Marshal<span>Finance</span></div>

    <!-- Tampilkan error jika ada -->
    @if ($errors->any())
        <div class="alert error">{{ $errors->first() }}</div>
    @endif

    <!-- Tampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    <!-- Form login -->
    <form method="POST" action="/login" class="auth-form">
        @csrf <!-- Token CSRF untuk keamanan -->

        <!-- Input email -->
        <div class="form-group">
            <input type="email" name="email" required placeholder=" ">
            <label for="email">Email</label>
        </div>

        <!-- Input password -->
        <div class="form-group password-group">
            <input type="password" name="password" required placeholder=" ">
            <label for="password">Password</label>
        </div>

        <!-- Tombol submit -->
        <button type="submit" class="btn-auth">Masuk Sekarang</button>
    </form>

    <!-- Footer link ke halaman signup -->
    <p class="auth-footer">
        Belum punya akun? <a href="/signup">Daftar gratis</a>
    </p>
</div>
@endsection
