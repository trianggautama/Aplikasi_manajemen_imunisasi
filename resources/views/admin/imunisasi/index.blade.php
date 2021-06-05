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
                            <a class="btn btn-primary" href="{{Route('admin.laporan.imunisasi')}}" target="_blank"><i class="material-icons">print</i>
                                Cetak Data</a>
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
                                <th>Petugas Imunisasi</th>
                                <th>Tanggal Imunisasi</th>
                                <th>Tempat Imunisasi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$d->vaksin->nama_vaksin}}</td>
                                <td>{{$d->bidan->nama}}</td>
                                <td>{{carbon\carbon::parse($d->tanggal_imunisasi)->translatedFormat('d F Y')}}</td>
                                <td>{{$d->tempat_imunisasi}}</td>
                                <td class="text-center">
                                    <a class="btn btn-rounded btn-info"
                                        href="{{Route('admin.imunisasi.show',['uuid'=>$d->id])}}"><i
                                            class="material-icons">info</i></a>
                                    <a class="btn btn-rounded btn-primary"
                                        href="{{Route('admin.imunisasi.edit',['uuid'=>$d->id])}}"><i
                                            class="material-icons">edit</i></a>
                                    <a href="{{Route('admin.imunisasi.destroy',['uuid'=>$d->id])}}"
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
            <form action="{{Route('admin.imunisasi.store')}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Bidan</label>
                        <select name="bidan_id" id="" class="form-control" required>
                            <option value="">-- pilih petugas imunisasi --</option>
                            @foreach ($bidan as $v)
                            <option value="{{$v->bidan_id}}">{{$v->nama}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Vaksin</label>
                        <select name="vaksin_id" id="" class="form-control" required>
                            <option value="">-- pilih vaksin --</option>
                            @foreach ($vaksin as $v)
                            <option value="{{$v->vaksin_id}}">{{$v->nama_vaksin}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Imunisasi</label>
                        <input type="date" name="tanggal_imunisasi" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Tempat Imunisasi</label>
                        <input type="text" name="tempat_imunisasi" class="form-control" required>
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