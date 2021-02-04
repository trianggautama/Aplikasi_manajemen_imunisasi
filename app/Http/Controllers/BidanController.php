<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidanController extends Controller
{
    public function index()
    {

        return view('admin.bidan.index');
    }

    public function edit()
    {

        return view('admin.bidan.edit');
    }
}
