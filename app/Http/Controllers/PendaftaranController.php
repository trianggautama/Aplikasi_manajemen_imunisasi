<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {

        return view('admin.pendaftaran.index');
    }

    public function edit()
    {

        return view('admin.pendaftaran.edit');
    }

    public function show()
    {

        return view('admin.pendaftaran.show');
    }

    public function anak()
    {

        return view('admin.pendaftaran.anak');
    }
}
 