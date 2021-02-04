<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
