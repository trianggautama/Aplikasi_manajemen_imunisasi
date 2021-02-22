@extends('layouts.main')
@section('content')
<div class="main-content-container container-fluid p-4">
    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md">
                            <h5>Data Anak</h5>
                        </div>
                        <div class="col-md text-right">
                            <a class="btn btn-primary" href="{{Route('admin.laporan.anak')}}" target="_blank"><i
                                    class="material-icons">print</i> Cetak Data</a>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target=".bd-example-modal-lg">+ Tambah Data</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>No Hp</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->nama_anak}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->jk}}</td>
                                <td>{{$d->tempat_lahir}}, {{carbon\carbon::parse($d->tanggal_lahir)->format('d F Y')}}
                                </td>
                                <td>08512131311</td>
                                <td class="text-center">
                                    <a class="btn btn-rounded btn-success"
                                        href="{{Route('admin.anak.show',['uuid'=>$d->anak_id])}}"><i
                                            class="material-icons">info</i></a>
                                    <a class="btn btn-rounded btn-primary"
                                        href="{{Route('admin.anak.edit',['uuid'=>$d->anak_id])}}"><i
                                            class="material-icons">edit</i></a>
                                    <a class="btn btn-secondary" href="#"><i class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{Route('admin.anak.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <label for="">Nama Anak</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </span>
                            <input type="text" name="nama_anak" class="form-control" id="form1-username"
                                placeholder="Nama Anak" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" id="" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <div class="form-inline">
                            <div class="custom-control custom-radio mb-1 mr-3">
                                <input type="radio" id="formsRadioDefault1" name="jk" value="Laki-laki"
                                    class="custom-control-input" checked>
                                <label class="custom-control-label" for="formsRadioDefault1">Laki -laki</label>
                            </div>
                            <div class="custom-control custom-radio mb-1">
                                <input type="radio" id="formsRadioDefault2" name="jk" value="Perempuan"
                                    class="custom-control-input">
                                <label class="custom-control-label" for="formsRadioDefault2">Perempuan</label>
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
                                    <input type="text" name="tempat_lahir" class="form-control" id="form1-username"
                                        placeholder="Kota..." required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input class="form-control" name="tanggal_lahir" type="date" required>
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
                                    <input type="text" name="nama_ibu" class="form-control" id="form1-username"
                                        placeholder="Nama Ibu" required>
                                </div>
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
                                    <input type="text" name="nama_ayah" class="form-control" id="form1-username"
                                        placeholder="Nama Ayah" required>
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
                            <input type="text" name="no_hp" class="form-control" id="form1-username" maxlength="14"
                                required>
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
                            <input type="text" name="nama_kelurahan" class="form-control" id="form1-username" required>
                        </div>
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