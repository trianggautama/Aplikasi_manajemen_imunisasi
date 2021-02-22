@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                   <div class="row">
                       <div class="col-md">
                            <h5>Edit Data Kms (Nama Anak)</h5>
                       </div>
                   </div>
                </div>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="">Data Imunisasi</label>
                        <select name="" id="" class="form-control">
                            <option value="">-- pilih imunisasi --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Tinggi</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons">height</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" maxlength="14"> 
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Berat</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons">monitor_weight</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username"> 
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Umur</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons">mood</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" value="ambil dari carbon age tanggal lahir"> 
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.kms.index',['uuid'=>'dgahg'])}}" class="btn btn-secondary"><i class="material-icons">keyboard_arrow_left</i> Batal</a>
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