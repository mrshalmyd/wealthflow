@extends('layouts.app')

@section('content')
<div class="auth-container minimal">
    <!-- Logo aplikasi -->
    <div class="auth-logo">Marshal<span>Finance</span></div>

    <!-- Tampilkan error jika ada -->
    @if ($errors->any())
        <div class="alert error">{{ $errors->first() }}</div>
    @endif

    <!-- Form signup -->
    <form method="POST" action="/signup" class="auth-form">
        @csrf <!-- Token CSRF untuk keamanan -->

        <!-- Input username -->
        <div class="form-group">
            <input type="text" name="username" required placeholder=" ">
            <label for="username">Username</label>
        </div>

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
        <button type="submit" class="btn-auth">Daftar Gratis</button>
    </form>

    <!-- Footer link ke halaman login -->
    <p class="auth-footer">
        Sudah punya akun? <a href="/login">Masuk di sini</a>
    </p>
</div>
@endsection
