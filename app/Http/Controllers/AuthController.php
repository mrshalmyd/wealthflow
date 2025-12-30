<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email    = trim($request->input('email'));
        $password = $request->input('password');

        if (empty($email) || empty($password)) {
            return back()->withErrors(['msg' => 'Email dan password harus diisi.']);
        }

        $user = DB::table('users')->where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            // Simpan session
            $request->session()->put('user_id', $user->id);
            $request->session()->put('username', $user->username);

            return redirect('/dashboard');
        } else {
            return back()->withErrors(['msg' => 'Email atau password salah.']);
        }
    }

    public function signout(Request $request)
{
    $request->session()->flush();
    return redirect('/');
}


    public function signup(Request $request)
    {
        $username = trim($request->input('username'));
        $email    = trim($request->input('email'));
        $password = $request->input('password');

        if (empty($username) || empty($email) || empty($password)) {
            return back()->withErrors(['msg' => 'Semua field wajib diisi.']);
        }
        if (strlen($username) < 4) {
            return back()->withErrors(['msg' => 'Username minimal 4 karakter.']);
        }
        if (strlen($password) < 6) {
            return back()->withErrors(['msg' => 'Password minimal 6 karakter.']);
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return back()->withErrors(['msg' => 'Format email tidak valid.']);
        }

        $check = DB::table('users')
            ->where('email', $email)
            ->orWhere('username', $username)
            ->first();

        if ($check) {
            return back()->withErrors(['msg' => 'Username atau email sudah digunakan.']);
        }

        DB::table('users')->insert([
            'username' => $username,
            'email'    => $email,
            'password' => Hash::make($password),
        ]);

        return redirect('/login')->with('success', 'Pendaftaran berhasil! Silakan masuk.');
    }
}
