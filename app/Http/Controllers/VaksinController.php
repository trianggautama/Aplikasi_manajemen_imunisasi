<?php

namespace App\Http\Controllers;

use App\Models\Vaksin;
use Illuminate\Http\Request;

class VaksinController extends Controller
{
    public function index()
    {
        $data = Vaksin::all();
        return view('admin.vaksin.index', compact('data'));
    }

    public function store(Request $req)
    {
        $data = Vaksin::create($req->all());

        return back()->withToastSuccess('Data berhasil disimpan');
    }

    public function show($uuid)
    {
        $data = Vaksin::findOrFail($uuid);

        return view('admin.vaksin.show', compact('data'));
    }

    public function edit($uuid)
    {
        $data = Vaksin::findOrFail($uuid);

        return view('admin.vaksin.edit', compact('data'));
    }

    public function update($uuid, Request $req)
    {
        $data = Vaksin::findOrFail($uuid);

        $data->fill($req->all())->save();

        return redirect()->route('admin.vaksin.index')->withToastSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = Vaksin::findOrFail($uuid)->delete();

        return back()->withToastSuccess('Data berhasil dihapus');
    }
}
