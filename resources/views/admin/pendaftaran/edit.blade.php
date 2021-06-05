@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Edit Data Pendaftaran</h5>
                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <label for="">Nama Anak</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">medication</i>
                                    </span>
                                </span>
                                <input type="text" name="nama" class="form-control" id="form1-username"
                                    placeholder="Nama Anak" value="{{$data->nama}}" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="input-group mb-3">
                                    <label for="">Tempat lahir</label>
                                    <div class="input-group input-group-seamless">
                                        <span class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons">location_on</i>
                                            </span>
                                        </span>
                                        <input type="text" name="tempat_lahir" class="form-control" id="form1-username"
                                            placeholder="Kota..." value="{{$data->tempat_lahir}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Tanggal Lahir</label>
                                    <input class="form-control" type="date" name="tanggal_lahir"
                                        value="{{$data->tanggal_lahir}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="">Nama Orangtua (Ibu)</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">medication</i>
                                    </span>
                                </span>
                                <input type="text" name="nama_orang_tua" class="form-control" id="form1-username"
                                    placeholder="Nama Orang Tua (Ibu)" value="{{$data->nama_orang_tua}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea name="alamat" id="" class="form-control" required>{{$data->alamat}}</textarea>
                        </div>
                        <div class="input-group mb-3">
                            <label for="">Nomor Hp</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">phone</i>
                                    </span>
                                </span>
                                <input type="text" name="nomor_telepon" class="form-control" id="form1-username"
                                    maxlength="14" value="{{$data->nomor_telepon}}" required>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{Route('admin.pendaftaran.index')}}" class="btn btn-secondary"><i
                                class="material-icons">keyboard_arrow_left</i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan
                            Data</button>
                    </div>
                </form>
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