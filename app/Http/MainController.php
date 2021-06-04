<?php

namespace App\Http\Controllers;

use App\Models\Permohonan_SIP;
use Carbon\Carbon;

class MainController extends Controller
{
    public function adminBeranda()
    {
        $data = Permohonan_SIP::where('status',0)->whereDate('created_at', Carbon::today())->get();
        return view('admin.index',compact('data'));
    }

    public function pemohonBeranda()
    {
        return view('pemohon.index');
    }

    public function kadisBeranda()
    {
        $data = Permohonan_SIP::where('status','5')->whereDate('created_at', Carbon::today())->get();
        return view('kadis.index',compact('data'));
    }

    public function sekretarisBeranda()
    {
        $data = Permohonan_SIP::where('status','4')->whereDate('created_at', Carbon::today())->get();
        return view('sekretaris.index',compact('data'));
    }

    public function kabidBeranda()
    {
        $data = Permohonan_SIP::where('status','1')->whereDate('created_at', Carbon::today())->get();
        return view('kabid.index',compact('data'));
    }

    public function kasiPjuBeranda()
    {
        $data = Permohonan_SIP::where('status','2')->whereDate('created_at', Carbon::today())->get();
        return view('kasi_pju.index',compact('data'));
    }

    public function PetugasProsesBeranda()
    {
        $data = Permohonan_SIP::where('status','3')->whereDate('created_at', Carbon::today())->get();
        return view('petugas.index',compact('data')); 
    }

}
