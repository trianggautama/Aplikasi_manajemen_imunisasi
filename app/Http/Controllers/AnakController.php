<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnakController extends Controller
{
    public function index()
    {

        return view('admin.anak.index');
    }

    public function show()
    {

        return view('admin.anak.show');
    }

    public function edit()
    {

        return view('admin.anak.edit');
    }
}
