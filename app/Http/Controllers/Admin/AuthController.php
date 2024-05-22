<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('index');
    }

    public function auth(Request $requests) {
        $requests->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $requests->only('email', 'password');

        if(Auth::attempt($credentials)) {
            $requests->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'credentials' => 'Maaf Data Yang Anda Inputkan Salah, Mohon Untuk Cek Kembali Email Dan Password Anda!!!',
        ]);
    }

    public function logout(Request $requests) {
        Auth::logout();
        $requests->session()->invalidate();
        $requests->session()->regenerateToken();

        return redirect()->route('admin.login');
    }

}
