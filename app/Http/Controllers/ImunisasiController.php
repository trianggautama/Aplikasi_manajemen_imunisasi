<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function index()
    {
        return view('admin.imunisasi.index');
    }

    public function store(Request $req)
    {
        
    }

    public function edit($uuid)
    {

        return view('admin.imunisasi.edit');
    }

    public function update(Request $req, $uuid)
    {
        

    }

    public function destroy($uuid)
    {
       
    }
}
