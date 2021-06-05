@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Beranda</span>
        <h3 class="page-title">Beranda Admin</h3>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-body text-center ">
                    <img id="main-logo" class="d-inline-block align-top" style="max-width:175px;" src="{{asset('asset_template/images/logo.png')}}" alt="Shards Dashboard">
                    <h5>Selamat Datang di aplikasi manajemen imunisasi pada puskesmas Pelaihari</h5>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- Small Stats Blocks -->
    <div class="row">
        <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Pegawai</span>
                <h6 class="stats-small__value count my-3">{{$pegawai}} <small>orang</small></h6>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-1"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-6 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Bidan</span>
                <h6 class="stats-small__value count my-3">{{$bidan}} <small>orang</small></h6>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-2"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Jenis Vaksin</span>
                <h6 class="stats-small__value count my-3">{{$vaksin}} <small>jenis vaksin</small> </h6>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-3"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-6 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Anak</span>
                <h6 class="stats-small__value count my-3">{{$anak}} <small>anak</small></h6>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-4"></canvas>
            </div>
        </div>
        </div>
        <div class="col-lg col-md-4 col-sm-12 mb-4">
        <div class="stats-small stats-small--1 card card-small">
            <div class="card-body p-0 d-flex">
            <div class="d-flex flex-column m-auto">
                <div class="stats-small__data text-center">
                <span class="stats-small__label text-uppercase">Imunisasi</span>
                <h6 class="stats-small__value count my-3">{{$imunisasi}} <small>pelaksanaan</small></h6>
                </div>
            </div>
            <canvas height="120" class="blog-overview-stats-small-5"></canvas>
            </div>
        </div>
        </div>
    </div>
    <!-- End Small Stats Blocks -->
</div>
@endsection