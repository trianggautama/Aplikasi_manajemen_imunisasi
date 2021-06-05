<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Bidan;
use App\Models\JadwalImunisasi;
use App\Models\Kms;
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

    public function kms($anak_id)
    {
        $anak     = Anak::whereAnak_id($anak_id)->first();
        $data     = Kms::whereAnakId($anak->anak_id)->latest()->get();
        $pdf      = PDF::loadView('laporan.kms', ['data'=>$data,'anak'=>$anak]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan KMS Anak.pdf');
    }

    public function imunisasi()
    {
        $data     = JadwalImunisasi::orderByDesc('id')->get();
        $pdf      = PDF::loadView('laporan.imunisasi', ['data'=>$data]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan imunisasi.pdf');
    }

    public function imunisasi_show($imunisasi_id)
    {
        $data     = JadwalImunisasi::findOrFail($imunisasi_id);
        $kms      = Kms::whereJadwal_imunisasi_id($data->id)->latest()->get();  
        $pdf      = PDF::loadView('laporan.imunisasi_show', ['data'=>$data,'kms'=>$kms]);
        $pdf->setPaper('a4', 'landscape');

        return $pdf->stream('Laporan imunisasi show.pdf');
    } 
} 
 