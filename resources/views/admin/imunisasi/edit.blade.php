@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Edit Data Bidan</h5>
                        </div>
                    </div>
                </div>
                <form action="" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Vaksin</label>
                            <select name="" id="" class="form-control">
                                <option value="">-- pilih vaksin --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Imunisasi</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                        <div class="card-footer text-right">
                            <a href="{{Route('admin.imunisasi.index')}}" class="btn btn-secondary"><i
                                    class="material-icons">keyboard_arrow_left</i> Batal</a>
                            <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan
                                Data</button>
                        </div>
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