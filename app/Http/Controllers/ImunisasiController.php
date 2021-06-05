<?php

namespace App\Http\Controllers;

use App\Models\Bidan;
use App\Models\JadwalImunisasi;
use App\Models\Kms;
use App\Models\Vaksin;
use Illuminate\Http\Request;

class ImunisasiController extends Controller
{
    public function index()
    {
        $vaksin = Vaksin::all();
        $bidan = Bidan::all();
        $data = JadwalImunisasi::latest()->get();
        return view('admin.imunisasi.index', compact('vaksin', 'bidan', 'data'));
    }

    public function store(Request $req)
    {
        JadwalImunisasi::create($req->all());

        return back()->withToastSuccess('Data berhasil disimpan');
    } 

    public function show($id)
    {

        $data = JadwalImunisasi::findOrFail($id);
        $kms  = Kms::whereJadwal_imunisasi_id($data->id)->latest()->get();  
        return view('admin.imunisasi.show', compact('data','kms')); 
    }

    public function edit($id)
    {

        $data = JadwalImunisasi::findOrFail($id);

        return view('admin.imunisasi.edit', compact('data'));
    }

    public function update(Request $req, $id)
    {

        $data = JadwalImunisasi::findOrFail($id);

        $data->update($req->all());

        return redirect()->route('admin.imunisasi.index')->withToastSuccess('Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = JadwalImunisasi::findOrFail($id)->delete();

        return back()->withToastSuccess('Data berhasil dihapus');
    }
}
