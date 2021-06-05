@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Tambah Data Anak</h5>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <label for="">Nama Anak</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" placeholder="Nama Anak"
                                value="ambil dari pendaftaran">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="" id="" class="form-control">Ambil dari pendaftaran</textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-inline">
                            <div class="custom-control custom-radio mb-1 mr-3">
                                <input type="radio" id="formsRadioDefault" name="formsRadioDefault"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="formsRadioDefault">Laki -laki</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="formsRadioChecked" name="formsRadioDefault"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="formsRadioChecked">Perempuan</label>
                            </div>
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
                                    <input type="text" class="form-control" id="form1-username" placeholder="Kota..."
                                        value="ambil dari pendaftaran"> </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input class="form-control" type="date">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="input-group mb-3">
                                <label for="">Nama Ibu</label>
                                <div class="input-group input-group-seamless">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">person</i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" id="form1-username" placeholder="Nama Ibu"
                                        value="ambil dari pendaftaran"> </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="input-group mb-3">
                                <label for="">Nama Ayah</label>
                                <div class="input-group input-group-seamless">
                                    <span class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">person</i>
                                        </span>
                                    </span>
                                    <input type="text" class="form-control" id="form1-username" placeholder="Nama Ayah">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">No Hp</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">phone</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" maxlength="14"
                                value="ambil dari pendaftaran">
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Nama Kelurahan</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">location_on</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username">
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.anak.index')}}" class="btn btn-secondary"><i
                            class="material-icons">keyboard_arrow_left</i> Batal</a>
                    <button type="button" class="btn btn-primary"><i class="material-icons">save</i> Simpan
                        Data</button>
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