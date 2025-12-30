@extends('layouts.app')

@section('content')
<div class="auth-container minimal">
    <div class="auth-logo">Marshal<span>Finance</span></div>

    @if ($errors->any())
        <div class="alert error">{{ $errors->first() }}</div>
    @endif

    @if (session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="/login" class="auth-form">
        @csrf
        <div class="form-group">
            <input type="email" name="email" required placeholder=" ">
            <label for="email">Email</label>
        </div>

        <div class="form-group password-group">
            <input type="password" name="password" required placeholder=" ">
            <label for="password">Password</label>
        </div>

        <button type="submit" class="btn-auth">Masuk Sekarang</button>
    </form>

    <p class="auth-footer">
        Belum punya akun? <a href="/signup">Daftar gratis</a>
    </p>
</div>
@endsection
