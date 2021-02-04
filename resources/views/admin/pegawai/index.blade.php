@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                   <div class="row">
                       <div class="col-md">
                            <h5>Data Pegawai</h5>
                       </div>
                       <div class="col-md text-right">
                            <a class="btn btn-primary" href="#"><i class="material-icons">print</i> Cetak Data</a>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">+ Tambah Data</button>
                       </div>
                   </div>
                </div>
                <div class="card-body">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>No Hp</th>
                            <th>Username</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pegawai 1</td>
                            <td>Laki -laki</td>
                            <td>BJB, 20-02-1999</td>
                            <td>08512131311</td>
                            <td>usernamepegawai</td>
                            <td class="text-center">                            
                                <a class="btn btn-rounded btn-primary" href="{{Route('admin.pegawai.edit',['uuid'=>'526fhf'])}}"><i class="material-icons">edit</i></a>
                                <a class="btn btn-secondary" href="#"><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>No Hp</th>
                            <th>Username</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </tfoot>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <div class="input-group mb-3">
                <label for="">Nama</label>
                <div class="input-group input-group-seamless">
                    <span class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="material-icons">person</i>
                        </span>
                    </span>
                    <input type="text" class="form-control" id="form1-username" placeholder="Nama Pegawai"> 
                </div>
            </div>
            <div class="form-group">
                <label for="">Alamat</label>
                <textarea name="" id="" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <div class="form-inline">
                    <div class="custom-control custom-radio mb-1 mr-3">
                        <input type="radio" id="formsRadioDefault" name="formsRadioDefault" class="custom-control-input">
                        <label class="custom-control-label" for="formsRadioDefault">Laki -laki</label>
                    </div>
                    <div class="custom-control custom-radio mb-1">
                        <input type="radio" id="formsRadioChecked" name="formsRadioDefault" class="custom-control-input" checked>
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
                        <input type="text" class="form-control" id="form1-username" placeholder="Kota..."> </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input class="form-control" type="date">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">No Hp</label>
                <input class="form-control" type="text">
            </div>
            <div class="input-group mb-3">
                <label for="">No Hp</label>
                <div class="input-group input-group-seamless">
                    <span class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="material-icons">phone</i>
                        </span>
                    </span>
                    <input type="text" class="form-control" id="form1-username" maxlength="14"> 
                </div>
            </div>
            <hr>
            <div class="input-group mb-3">
                <label for="">Username</label>
                <div class="input-group input-group-seamless">
                    <span class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="material-icons">person</i>
                        </span>
                    </span>
                    <input type="text" class="form-control" id="form1-username" placeholder="Username"> 
                </div>
            </div>
            <div class="input-group mb-3">
                <label for="">Password</label>
                <div class="input-group input-group-seamless">
                    <span class="input-group-prepend">
                        <span class="input-group-text">
                        <i class="material-icons">password</i> 
                        </span>
                    </span>
                    <input type="text" class="form-control" id="form1-username" placeholder="Password"> 
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