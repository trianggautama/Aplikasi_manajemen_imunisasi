<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = Pendaftaran::orderByDesc('pendaftaran_id')->get();

        return view('admin.pendaftaran.index', compact('data'));
    }

    public function verif($id)
    {
        $data = Pendaftaran::wherePendaftaranId($id)->first();
        $data->status = 1;
        $data->update();

        $anak = new Anak;
        $anak->nama_anak = $data->nama;
        $anak->tempat_lahir = $data->tempat_lahir;
        $anak->tanggal_lahir = $data->tanggal_lahir;
        $anak->nama_ibu = $data->nama_orang_tua;
        $anak->no_hp = $data->nomor_telepon;
        $anak->alamat = $data->alamat;

        $anak->save();

        return back()->withToastSuccess('Data berhasil diverifikasi');
    }

    public function edit($id)
    {
        $data = Pendaftaran::findOrFail($id);

        return view('admin.pendaftaran.edit', compact('data'));
    }

    public function update($id, Request $req)
    {
        $data = Pendaftaran::findOrFail($id);

        $data->update($req->all());

        return redirect()->route('admin.pendaftaran.index')->withToastSuccess('Data berhasil diubah');
    }

    public function show()
    {
        $data = Pendaftaran::findOrFail($id);

        return view('admin.pendaftaran.show', compact('data'));
    }

    public function anak()
    {

        return view('admin.pendaftaran.anak');
    }

    public function store(Request $req)
    {
        Pendaftaran::create($req->all());

        return back()->withToastSuccess('Pendaftaran berhasil');
    }

    public function storePendaftaran(Request $req)
    {
        Pendaftaran::create($req->all());

        return redirect()->route('welcome')->withToastSuccess('Pendaftaran berhasil');
    }

    public function destroy($od)
    {
        Pendaftaran::findOrFail($id)->delete();

        return back()->withSuccess('Data berhasil dihapus');

    }
}
