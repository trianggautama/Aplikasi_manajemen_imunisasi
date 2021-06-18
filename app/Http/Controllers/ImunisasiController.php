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

    public function show($uuid)
    {

        $data = JadwalImunisasi::findOrFail($uuid);
        $kms = Kms::whereJadwal_imunisasi_id($data->id)->latest()->get();
        return view('admin.imunisasi.show', compact('data', 'kms'));
    }

    public function edit($uuid)
    {
        $vaksin = Vaksin::all();
        $bidan = Bidan::all();
        $data = JadwalImunisasi::findOrFail($uuid);

        return view('admin.imunisasi.edit', compact('data', 'bidan', 'vaksin'));
    }

    public function update(Request $req, $uuid)
    {
        $data = JadwalImunisasi::findOrFail($uuid);

        $data->update($req->all());

        return redirect()->route('admin.imunisasi.index')->withToastSuccess('Data berhasil diubah');
    }

    public function destroy($uuid)
    {
        $data = JadwalImunisasi::findOrFail($uuid)->delete();

        return back()->withToastSuccess('Data berhasil dihapus');
    }
}
