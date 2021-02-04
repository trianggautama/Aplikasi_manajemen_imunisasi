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
                <div class="card-body">
                    <div class="input-group mb-3">
                        <label for="">Nama Vaksin</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons">medication</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" placeholder="Nama Pegawai"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Keteragan</label>
                        <textarea name="" id="" class="form-control"></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Pemnberian Imunisasi</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons">insert_drive_file</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" placeholder=". . . "> 
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Waktu Pemberian</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons">location_on</i>
                                </span>
                            </span>
                            <input type="date" class="form-control" id="form1-username"> 
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Ketegori umur</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="material-icons">child_care</i>
                                </span>
                            </span>
                            <input type="text" class="form-control" id="form1-username" placeholder="1-2 tahun"> 
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{Route('admin.vaksin.index')}}" class="btn btn-secondary"><i class="material-icons">keyboard_arrow_left</i> Batal</a>
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