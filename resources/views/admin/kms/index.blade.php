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
                            <a class="btn btn-primary" href="{{Route('admin.laporan.kms',['anak_id'=>$anak->anak_id])}}" target="_blank"><i class="material-icons">print</i> Cetak Data</a>
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
                                <th>Nama Vaksin</th>
                                <th>Tempat Imunisasi</th>
                                <th>Tanggal Imunisasi</th>
                                <th>Tinggi</th>
                                <th>Berat</th>
                                <th>Umur</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kms as $k)

                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$k->jadwal_imunisasi->vaksin->nama_vaksin}}</td>
                                <td>{{$k->jadwal_imunisasi->tempat_imunisasi}}</td>
                                <td>{{carbon\carbon::parse($k->jadwal_imunisasi->tanggal_imunisasi)->translatedFormat('d F Y')}}
                                </td>
                                <td>{{$k->tinggi_badan}} cm</td>
                                <td>{{$k->berat_badan}} kg</td>
                                <td>{{$k->umur}} tahun</td>
                                <td class="text-center">
                                    {{-- <a class="btn btn-rounded btn-primary"
                                        href="{{Route('admin.kms.edit',['uuid'=>$k->anak_id])}}"><i
                                        class="material-icons">edit</i></a> --}}
                                    <a href="{{Route('admin.kms.destroy',['uuid'=>$k->anak_id])}}" class="btn btn-secondary" onclick="return confirm('Apa anda yakin ingin menghapus data?')"><i class="material-icons">delete</i></a>
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
            <div class="modal-body">
                <form action="{{Route('admin.kms.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="anak_id" value="{{$anak->anak_id}}">
                    <div class="form-group mb-3">
                        <label for="">Imunisasi</label>
                        <select name="jadwal_imunisasi_id" id="" class="form-control" required>
                            <option value="">-- pilih imunisasi --</option>
                            @foreach ($imunisasi as $v)
                            <option value="{{$v->id}}">Imunisasi {{$v->vaksin->nama_vaksin}},
                                {{carbon\carbon::parse($v->tanggal_imunisasi)->translatedFormat('d F Y')}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Tinggi (cm)</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">height</i>
                                </span>
                            </span>
                            <input type="text" name="tinggi_badan" class="form-control" id="form1-username"
                                maxlength="14" required>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Berat (kg)</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">monitor_weight</i>
                                </span>
                            </span>
                            <input type="text" name="berat_badan" class="form-control" id="form1-username" required>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <label for="">Umur (bulan)</label>
                        <div class="input-group input-group-seamless">
                            <span class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="material-icons">mood</i>
                                </span>
                            </span>
                            <input type="text" name="umur" class="form-control" id="form1-username"
                                value="{{carbon\carbon::parse($anak->tanggal_lahir)->age}}">
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons">close</i>
                    Batal</button>
                <button type="submit" class="btn btn-primary"><i class="material-icons">save</i> Simpan Data</button>
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