<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Bidan;
use App\Models\JadwalImunisasi;
use App\Models\Pegawai;
use App\Models\Vaksin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function __construct()
    {

    }

    public function beranda()
    {
        $pegawai    = Pegawai::count();
        $bidan      = Bidan::count();
        $vaksin     = Vaksin::count();
        $anak       = Anak::count();
        $imunisasi  = JadwalImunisasi::count();
        return view('admin.index',compact('pegawai','bidan','vaksin','anak','imunisasi'));
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
