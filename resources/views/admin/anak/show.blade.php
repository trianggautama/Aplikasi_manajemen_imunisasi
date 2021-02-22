@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Detail Data Anak</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <td style="width:20%">Nama Anak</td>
                            <td style="width:10%">: {{$data->nama_anak}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td style="width:10%">: {{$data->alamat}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td style="width:10%">: {{$data->jk}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td style="width:10%">: {{$data->tempat_lahir}},
                                {{carbon\carbon::parse($data->tanggal_lahir)->translatedFormat('d M Y')}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td style="width:10%">: {{$data->nama_ayah}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td style="width:10%">: {{$data->nama_ibu}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No. Hp</td>
                            <td style="width:10%">: {{$data->no_hp}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td style="width:10%">: {{$data->nama_kelurahan}}</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.anak.index')}}" class="btn btn-secondary"><i
                            class="material-icons">keyboard_arrow_left</i> Kembali</a>
                    <a href="{{Route('admin.kms.index',['uuid'=>'dacdhg'])}}" class="btn btn-primary"><i
                            class="material-icons">accessibility</i> Data KMS Anak</a>
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