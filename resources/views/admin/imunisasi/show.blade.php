@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Detail Imunisasi</h5>
                        </div>
                        <div class="col-md text-right">
                            <a href="{{Route('admin.laporan.imunisasi_show',['id'=>$data->id])}}"
                                class="btn btn-primary" target="_blank"><i class="material-icons">print</i> Cetak Detail
                                Imunisasi</a>
                            <a href="{{Route('admin.imunisasi.index')}}" class="btn btn-secondary"><i
                                    class="material-icons">keyboard_arrow_left</i> Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td style="width:20%">Jenis Vaksin</td>
                            <td style="width:3%">: </td>
                            <td>{{$data->vaksin->nama_vaksin}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Imunisasi</td>
                            <td>: </td>
                            <td>{{Carbon\carbon::parse($data->tanggal_informasi)->translatedFormat('d F Y')}}</td>
                        </tr>
                        <tr>
                            <td>Tempat Imunisasi</td>
                            <td>: </td>
                            <td>{{$data->tempat_imunisasi}}</td>
                        </tr>
                        <tr>
                            <td>Nama Bidan</td>
                            <td>: </td>
                            <td>{{$data->bidan->nama}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <h5>Detail Imunisasi</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Anak</th>
                                <th>Jenis Kelamin</th>
                                <th>Nama Ibu</th>
                                <th>Tinggi</th>
                                <th>Berat</th>
                                <th>Umur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kms as $k)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$k->anak->nama_anak}}</td>
                                <td>{{$k->anak->jk}}</td>
                                <td>{{$k->anak->nama_ibu}}
                                </td>
                                <td>{{$k->tinggi_badan}} cm</td>
                                <td>{{$k->berat_badan}} kg</td>
                                <td>{{$k->umur}} </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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