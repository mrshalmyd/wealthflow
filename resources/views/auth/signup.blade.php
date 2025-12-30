@extends('layouts.app')

@section('content')
<div class="auth-container minimal">
    <div class="auth-logo">Marshal<span>Finance</span></div>

    @if ($errors->any())
        <div class="alert error">{{ $errors->first() }}</div>
    @endif

    <form method="POST" action="/signup" class="auth-form">
        @csrf
        <div class="form-group">
            <input type="text" name="username" required placeholder=" ">
            <label for="username">Username</label>
        </div>

        <div class="form-group">
            <input type="email" name="email" required placeholder=" ">
            <label for="email">Email</label>
        </div>

        <div class="form-group password-group">
            <input type="password" name="password" required placeholder=" ">
            <label for="password">Password</label>
        </div>

        <button type="submit" class="btn-auth">Daftar Gratis</button>
    </form>

    <p class="auth-footer">
        Sudah punya akun? <a href="/login">Masuk di sini</a>
    </p>
</div>
@endsection
