<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function __construct()
    {

    }

    public function beranda()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();

        return redirect()->route('login')->withToastSuccess('Anda berhasil logout');
    }
}
