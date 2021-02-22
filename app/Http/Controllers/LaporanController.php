<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function pegawai()
    {
        $data     = null;
        $pdf      = PDF::loadView('laporan.pegawai', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan Pegawai.pdf');
    }

    public function bidan()
    {
        $data     = null;
        $pdf      = PDF::loadView('laporan.bidan', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan bidan.pdf');
    }

    public function anak()
    {
        $data     = null;
        $pdf      = PDF::loadView('laporan.anak', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan anak.pdf');
    }

    public function vaksin()
    {
        $data     = null;
        $pdf      = PDF::loadView('laporan.vaksin', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan vaksin.pdf');
    }
}
 