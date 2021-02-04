<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaksinController extends Controller
{
    public function index()
    {

        return view('admin.vaksin.index');
    }

    public function edit()
    {

        return view('admin.vaksin.edit');
    }
}
