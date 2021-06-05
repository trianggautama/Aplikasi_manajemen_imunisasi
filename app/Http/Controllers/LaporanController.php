<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Bidan;
use App\Models\Pegawai;
use App\Models\Pendaftaran;
use App\Models\Vaksin;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function pegawai()
    {
        $data     = Pegawai::all(); 
        $pdf      = PDF::loadView('laporan.pegawai', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Pegawai.pdf');
    }

    public function bidan()
    {
        $data     = Bidan::all();
        $pdf      = PDF::loadView('laporan.bidan', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan bidan.pdf');
    }

    public function anak()
    {
        $data     = Anak::all();
        $pdf      = PDF::loadView('laporan.anak', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan anak.pdf');
    }

    public function vaksin()
    {
        $data     = Vaksin::all();
        $pdf      = PDF::loadView('laporan.vaksin', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan vaksin.pdf');
    }

    public function pendaftaran()
    {
        $data     = Pendaftaran::orderByDesc('pendaftaran_id')->get();
        $pdf      = PDF::loadView('laporan.pendaftaran', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan pendaftaran.pdf');
    }
}
 