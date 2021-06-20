@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Edit Data Vaksin</h5>
                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <label for="">Nama Vaksin</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">medication</i>
                                    </span>
                                </span>
                                <input type="text" name="nama_vaksin" class="form-control" id="form1-username"
                                    placeholder="Nama Vaksin" value="{{$data->nama_vaksin}}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Keteragan</label>
                            <textarea name="keterangan" id="" class="form-control"
                                required>{{$data->keterangan}}</textarea>
                        </div>
                        <div class="input-group mb-3">
                            <label for="">Pemberian Imunisasi</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">insert_drive_file</i>
                                    </span>
                                </span>
                                <input type="text" name="p_imunisasi" class="form-control" id="form1-username"
                                    placeholder=". . . " value="{{$data->p_imunisasi}}" required>
                            </div>
                        </div>
                        {{-- <div class="input-group mb-3">
                            <label for="">Waktu Pemberian</label>
                            <div class="input-group input-group-seamless">
                                <span class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="material-icons">location_on</i>
                                    </span>
                                </span>
                                <input type="date" name="waktu_pemberian" class="form-control" id="form1-username"
                                    value="{{$data->waktu_pemberian}}" required>
                    </div>
            </div> --}}
            <div class="input-group mb-3">
                <label for="">Ketegori umur</label>
                <div class="input-group input-group-seamless">
                    <span class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="material-icons">child_care</i>
                        </span>
                    </span>
                    <input type="text" name="k_umur" class="form-control" id="form1-username" placeholder="1-2 tahun"
                        value="{{$data->k_umur}}" required>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <a href="{{Route('admin.vaksin.index')}}" class="btn btn-secondary"><i
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