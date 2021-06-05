@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Edit Data Imunisasi</h5>
                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Bidan</label>
                            <select name="bidan_id" id="" class="form-control" required>
                                <option value="">-- pilih petugas imunisasi --</option>
                                @foreach ($bidan as $v)
                                <option value="{{$v->bidan_id}}" {{$v->bidan_id == $data->bidan_id ? 'selected' : ''}}>
                                    {{$v->nama}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Vaksin</label>
                            <select name="vaksin_id" id="" class="form-control" required>
                                <option value="">-- pilih vaksin --</option>
                                @foreach ($vaksin as $v)
                                <option value="{{$v->vaksin_id}}"
                                    {{$v->vaksin_id == $data->vaksin_id ? 'selected' : ''}}>
                                    {{$v->nama_vaksin}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Imunisasi</label>
                            <input type="date" name="tanggal_imunisasi" value="{{$data->tanggal_imunisasi}}"
                                class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Imunisasi</label>
                            <input type="text" name="tempat_imunisasi" value="{{$data->tempat_imunisasi}}"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{Route('admin.imunisasi.index')}}" class="btn btn-secondary"><i
                                class="material-icons">keyboard_arrow_left</i> Batal</a>
                        <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan
                            Data</button>
                    </div>
                </form>
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