<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KmsController extends Controller
{
    public function index()
    {

        return view('admin.kms.index');
    }

    public function edit()
    {

        return view('admin.kms.edit');
    }
}
