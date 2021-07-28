<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            font-family: arial;
        }

        body {
            font-family: arial !important;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table,
        th,
        td {
            border: 1px solid #708090;
        }

        th {
            /* text-align: center; */
            height: 40px;
        }

        td {
            text-align: center;
            padding: 2px;
        }

        br {
            margin-bottom: 5px !important;
        }

        .judul {
            text-align: center;
        }

        .header {
            text-align: center;
            padding: 0px;
        }

        .pemko {
            width: 80px;
        }

        .bakti_husada {
            width: 140px;
        }

        .logo {
            float: left;
            margin-right: 0px;
            width: 15%;
            padding: 0px;
            text-align: right;
        }

        .headtext {
            /* float:right; */
            margin-left: 0px;
            width: 100%;
            padding-left: 60px !important;
            padding-right: 8%;
        }

        hr {
            height: 3px;
            background-color: black;
        }

        .ttd {
            margin-left: 70%;
            text-align: center;
            text-transform: uppercase;
        }

        .text-center {
            text-align: center;
        }

        @page {
            size: 29 cm 21.5 cm;
            margin: 1 cm 1 cm 0 cm 1 cm !important;
            padding: 0px !important;
        }
    </style>
</head>

<body>
    <div class="header" style="padding=0px; margin:0px">
        <table style="border: none">
            <tr style="border: none">
                <td style="width:20%; border: none;"> <img class="pemko" src="asset_template/images/pemkab.png"></td>
                <td style="width:60%; border: none">
                    <h4 style="margin:0px; border: none">PEMERINTAH KABUPATEN TANAH LAUT </h4>
                    <h2 style="margin:0px; border: none">DINAS KESEHATAN </h2>
                    <h2 style="margin:0px; border: none">PUSKESMAS PELAIHARI </h2>
                    <p style="margin:0px; border: none">Karang Taruna, Pelaihari, Tanah Laut, Pelaihari, Tanah Laut,
                        Kabupatèn Tanah Laut, Kalimantan Kidul 70812</p>
                </td>
                <td style="width:20%; border: none"><img class="bakti_husada" src="asset_template/images/logo.png"
                        width="100%"></td>
            </tr>
        </table>
        <hr>
    </div>
    <div class="container" style="padding=0px; margin:0px">
        <div class="isi" style="padding=0px; margin:0px">
            <h3 class="headtext" style="text-align: center;">Data Vaksin</h3>
            <p>Laporan Data Tahun : 2020</p>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Vaksin</th>
                        <th>Nama Vaksin</th>
                        <th>Keterangan</th>
                        <th>Pemberian Imunisasi</th>
                        {{-- <th>Waktu Pemberian</th> --}}
                        <th>Kategori Umur</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$d->vaksin_id}}</td>
                        <td>{{$d->nama_vaksin}}</td>
                        <td>{{$d->keterangan}}</td>
                        <td>{{$d->p_imunisasi}}</td>
                        {{-- <td>{{$d->waktu_pemberian}}</td> --}}
                        <td>{{$d->k_umur}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <br>
            <table style="border: none">
                <tr style="border: none">
                    <td style="width: 60%;border: none;">

                    </td>
                    <td style="border: none">
                        Pelaiharis , {{Carbon\carbon::now()->translatedFormat('d F Y')}}
                        <br><br>
                        <p style="margin:0px;">Kepala Puskesmas</p>
                        <br>
                        <br>
                        <br>
                        <br>
                        <p style="text-decoration: underline; margin:0px;">Nama</p>
                        <p style="margin:0px;">NIP. -</p>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</body>

</html>