<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use app\Models\User;
use Illuminate\Validation\Rule;  // <-- PASTIKAN INI ADA

class AuthController extends Controller
{
    /**
     * Handle user login (email atau username)
     */
    public function login(Request $request)
    {
        // Validasi input
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

        if ($user && Hash::check($password, $user->password)) {
            // Simpan session
            $request->session()->put('user_id', $user->id);
            $request->session()->put('username', $user->username);

            return redirect('/dashboard');
        }

        return back()->withErrors(['msg' => 'Email/Username atau password salah.']);
    }

    /**
     * Handle user logout
     */
    public function signout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

    /**
     * Handle user signup
     */
    public function signup(Request $request)
{
    $validated = $request->validate([
        'username' => [
            'required',
            'string',
            'min:4',
            'max:255',
            Rule::unique('users', 'username')  // table name tanpa schema
                ->where(function ($query) {
                    $query->from('public.users');  // <-- ini kuncinya, paksa "public"."users"
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

    User::create([
        'username' => trim($request->input('username')),
        'email'    => trim($request->input('email')),
        'password' => Hash::make($request->input('password')),
    ]);

    return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan masuk.');
}
}