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
                            <a class="btn btn-primary" href="{{Route('admin.laporan.pegawai')}}" target="_blank"><i
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
                                <th>NIP</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>No Hp</th>
                                <th>Alamat</th>
                                <th>Username</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->nip}}</td>
                                <td>{{$d->nama}}</td>
                                <td>{{$d->jk}}</td>
                                <td>{{$d->tempat_lahir}},
                                    {{carbon\carbon::parse($d->tgl_lahir)->translatedFormat('d M Y')}}</td>
                                <td>{{$d->no_hp}}</td>
                                <td>{{$d->alamat}}</td>
                                <td>{{$d->user->username}}</td>
                                <td class="text-center">
                                    <a class="btn btn-rounded btn-primary"
                                        href="{{Route('admin.pegawai.edit',['uuid'=>$d->user_id])}}"><i
                                            class="material-icons">edit</i></a>
                                    <a href="{{Route('admin.pegawai.destroy',['uuid'=>$d->user_id])}}"
                                        class="btn btn-secondary"
                                        onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i
                                            class="material-icons">delete</i></a>
                                </td>
                            </tr>
                            @endforeach
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
            <form action="{{Route('admin.pegawai.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="role" value="1">
                    <div class=" input-group mb-3">
                        <label for="">NIP</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">account_circle</i>
                                </span>
                            </span>
                            <input type="text" name="nip" class="form-control" id="form1-username"
                                placeholder="NIP Pegawai" required>
                        </div>
                    </div>
                    <div class=" input-group mb-3">
                        <label for="">Nama</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </span>
                            <input type="text" name="nama" class="form-control" id="form1-username"
                                placeholder="Nama Pegawai" required>
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
                                <input class="form-control" name="tgl_lahir" type="date" required>
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
                    <hr>
                    <div class="input-group mb-3">
                        <label for="">Username</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">person</i>
                                </span>
                            </span>
                            <input type="text" name="username" class="form-control" id="form1-username"
                                placeholder="Username" required>
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
                            <input type="text" name="password" class="form-control" id="form1-username"
                                placeholder="Password" required>
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