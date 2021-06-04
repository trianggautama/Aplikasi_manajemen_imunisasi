@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Data Imunisasi</h5>
                        </div>
                        <div class="col-md text-right">
                            <a class="btn btn-primary" href="#" target="_blank"><i
                                    class="material-icons">print</i> Cetak Data</a>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#exampleModal">+ Tambah Data</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Vaksin</th>
                                <th>Tanggal Imunisasi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Vaksin Campak</td>
                                <td>1 Juni 2021</td>
                                <td class="text-center">
                                    <a class="btn btn-rounded btn-primary"
                                        href="{{Route('admin.imunisasi.edit',['uuid'=>'jchdijsh'])}}"><i
                                            class="material-icons">edit</i></a>
                                    <a href="{{Route('admin.imunisasi.destroy',['uuid'=>'cdsh'])}}" class="btn btn-secondary" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('admin.imunisasi.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="role" value="2">
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
                    <div class="form-group">
                        <label for="">Tempat Imunisasi</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                            class="material-icons">close</i>
                        Batal</button>
                    <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan
                        Data</button>
                </div>
            </form>
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