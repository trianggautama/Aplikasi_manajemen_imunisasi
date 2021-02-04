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
                            <td style="width:10%">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td style="width:10%">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td style="width:10%">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td style="width:10%">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Ayah</td>
                            <td style="width:10%">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td style="width:10%">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>No. Hp</td>
                            <td style="width:10%">:</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td style="width:10%">:</td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.anak.index')}}" class="btn btn-secondary"><i class="material-icons">keyboard_arrow_left</i> Batal</a>
                    <button type="button" class="btn btn-primary"><i class="material-icons">save</i> Simpan Data</button>
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