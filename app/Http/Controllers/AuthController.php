<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('Sekolah.login');
    }

    public function registerView()
    {
        return view('Sekolah.register');
    }

    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:255',
        ]);

        // Ambil user dari email
        $user = User::where('email', $credentials['email'])->first();

        // Cek user ada atau tidak
        if (!$user) {
            return redirect()->route('login')->with('email', $credentials['email'])->withErrors(['email' => 'Email not found']);
        }

        // Cek password sama atau tidak
        if (Hash::check($credentials['password'], $user->password)) {
            Auth::login($user);
            return redirect()->route('biodata.index')->with('success', 'Login berhasil');
        } else {
            return redirect()->route('login')->with('email', $credentials['email'])->withErrors(['password' => 'Invalid Password']);
        }
    }


    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
        ]);

        User::create($credentials);
        return redirect()->route('login')->with('success', "Register successful, please login {$credentials['name']}");
    }
}
