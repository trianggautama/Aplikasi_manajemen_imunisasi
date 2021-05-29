<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use Illuminate\Http\Request;

class KmsController extends Controller
{
    public function index($uuid)
    {
        $anak = Anak::findOrFail($uuid);


        return view('admin.kms.index',compact('anak'));
    }

    public function edit()
    {

        return view('admin.kms.edit');
    }
}
