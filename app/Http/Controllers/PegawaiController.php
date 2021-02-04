<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {

        return view('admin.pegawai.index');
    }

    public function edit()
    {

        return view('admin.pegawai.edit');
    }
}
