<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PegawaiController extends Controller
{
    public function index()
    {
        $data = Pegawai::all(); 
        return view('admin.pegawai.index', compact('data'));
    }

    public function store(Request $req)
    {
        $reqUser = $req->only('username', 'role');
        $reqUser['password'] = Hash::make($req->password);

        $user = User::create($reqUser);

        $user->pegawai()->create($req->except('username', 'password', 'role'));

        return back()->withToastSuccess('Data berhasil disimpan');
    }

    public function edit($uuid)
    {
        $user = User::findOrFail($uuid);

        return view('admin.pegawai.edit', compact('user'));
    }

    public function update(Request $req, $uuid)
    {
        $user = User::findOrFail($uuid);

        $reqUser = $req->only('username', 'role');

        if ($req->password) {
            $reqUser['password'] = Hash::make($req->password);
        }

        $user->fill($reqUser)->save();

        $user->pegawai->fill($req->except('username', 'password', 'role'))->save();

        return redirect()->route('admin.pegawai.index')->withToastSuccess('Data berhasil diubah');

    }

    public function destroy($uuid)
    {
        $user = User::findOrFail($uuid)->delete();

        return back()->withSuccess('Data berhasil dihapus');
    }
}
