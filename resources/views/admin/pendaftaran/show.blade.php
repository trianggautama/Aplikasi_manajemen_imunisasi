@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Detail Data Pendaftaran</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td style="width:20%">Nama Anak</td>
                            <td style="width:10%">: {{$data->nama}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td style="width:20%">: {{$data->tempat_lahir}},
                                {{carbon\carbon::parse($data->tanggal_lahir)->translatedFormat('d F Y')}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Orang tua</td>
                            <td style="width:20%">: {{$data->nama_orang_tua}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td style="width:20%">: {{$data->alamat}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No.Hp</td>
                            <td style="width:20%">: {{$data->nomor_telepon}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Status Verifikasi</td>
                            <td style="width:20%">:
                                @switch($data->status)
                                @case(0)
                                <span class="badge badge-info">belum diverifikasi</span>

                                @break
                                @case(1)
                                <span class="badge badge-primary">terverifikasi</span>

                                @break
                                @default

                                @endswitch</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.pendaftaran.index')}}" class="btn btn-secondary"><i
                            class="material-icons">keyboard_arrow_left</i> Kembali</a>
                    {{-- <a href="{{Route('admin.pendaftaran.anak',['uuid'=>'526fhf'])}}" class="btn btn-primary"><i
                        class="material-icons">library_add</i> Tambahkan sebagai data anak </a> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
            $('#example').DataTable();
        } );
</script>
@endsection