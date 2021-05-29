@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                   <div class="row">
                       <div class="col-md">
                            <h5>Data Kms ( {{$anak->nama_anak}} )</h5>
                       </div>
                       <div class="col-md text-right">
                            <a class="btn btn-primary" href="#"><i class="material-icons">print</i> Cetak Data</a>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg">+ Tambah Data</button>
                       </div>
                   </div>
                </div>
                <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Imunisasi</th>
                            <th>Tanggal Imunisasi</th>
                            <th>Tinggi</th>
                            <th>Berat</th>
                            <th>Umur</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Imunisasi 1</td>
                            <td>2 Februari 2021</td>
                            <td>40 cm</td>
                            <td>26 kg</td>
                            <td>5 tahun</td>
                            <td class="text-center">     
                                <a class="btn btn-rounded btn-primary" href="{{Route('admin.kms.edit',['uuid'=>'526fhf'])}}"><i class="material-icons">edit</i></a>
                                <a class="btn btn-secondary" href="#"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    </tbody>    
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="form-group mb-3">
                <label for="">Data Imunisasi</label>
                <select name="" id="" class="form-control">
                    <option value="">-- pilih imunisasi --</option>
                </select>
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
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i> Batal</button>
        <button type="button" class="btn btn-primary"><i class="material-icons">save</i> Simpan Data</button>
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