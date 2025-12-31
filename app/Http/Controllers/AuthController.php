<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    /**
     * Handle user login (email atau username).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'email'    => 'nullable|email',
            'username' => 'nullable|string',
            'password' => 'required',
        ]);

        $password = $request->input('password');

        // Cari user berdasarkan email ATAU username
        $user = User::where('email', $request->email)
            ->orWhere('username', $request->username)
            ->first();

        // Cek apakah user ditemukan dan password sesuai
        if ($user && Hash::check($password, $user->password)) {
            // Simpan data user ke session
            $request->session()->put('user_id', $user->id);
            $request->session()->put('username', $user->username);

            return redirect('/dashboard');
        }

        // Jika gagal login, kembali dengan error message
        return back()->withErrors(['msg' => 'Email/Username atau password salah.']);
    }

    /**
     * Handle user logout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signout(Request $request)
    {
        // Hapus semua data session
        $request->session()->flush();

        return redirect('/');
    }

    /**
     * Handle user signup (registrasi).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function signup(Request $request)
    {
        // Validasi input registrasi
        $validated = $request->validate([
            'username' => [
                'required',
                'string',
                'min:4',
                'max:255',
                Rule::unique('users', 'username')
                    ->where(function ($query) {
                        $query->from('public.users');
                    }),
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users', 'email')
                    ->where(function ($query) {
                        $query->from('public.users');
                    }),
            ],
            'password' => 'required|string|min:6',
        ]);

        // Simpan user baru ke database
        User::create([
            'username' => trim($request->input('username')),
            'email'    => trim($request->input('email')),
            'password' => Hash::make($request->input('password')),
        ]);

        // Redirect ke halaman login dengan pesan sukses
        return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan masuk.');
    }
}
