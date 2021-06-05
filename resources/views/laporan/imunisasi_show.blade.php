<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    *{
        font-family:arial;
    }
    body{
        font-family:arial !important;
        }
    table{
        border-collapse: collapse;
        width:100%;
      }
    table, th, td{
        border: 1px solid #708090;
      }
      th{
        /* text-align: center; */
        height:40px;
      }
      td{
        text-align: center;
        padding:2px;
      }
      br{
          margin-bottom: 5px !important;
      }
     .judul{
         text-align: center;
     }
     .header{
         text-align: center;
         padding: 0px;
     }
     .pemko{
         width:80px;
     }
     .bakti_husada{
         width:140px;
     }
     .logo{
         float: left;
         margin-right: 0px;
         width: 15%;
         padding:0px;
         text-align: right;
     }
     .headtext{
         /* float:right; */
         margin-left: 0px;
         width: 100%;
         padding-left:60px !important;
         padding-right:8%;
     }
     hr{
         height: 3px;
         background-color: black;
     }
     .ttd{
         margin-left:70%;
         text-align: center;
         text-transform: uppercase;
     }
     .text-center{
       text-align:center;
     }

     @page { 
        size: 21.5 cm 29 cm ; 
         margin: 1 cm 1 cm 0 cm 1 cm !important;
         padding: 0px !important;
         }
    </style>
</head>
<body>
<div class="header" style="padding=0px; margin:0px">
            <table style="border: none"> 
                <tr style="border: none">
                    <td style="width:20%; border: none;"> <img  class="pemko" src="asset_template/images/pemkab.png"></td>
                    <td style="width:60%; border: none">
                        <h4 style="margin:0px; border: none">PEMERINTAH KABUPATEN TANAH LAUT </h4>
                        <h2 style="margin:0px; border: none">DINAS KESEHATAN </h2>
                        <h2 style="margin:0px; border: none">PUSKESMAS PELAIHARI </h2>
                        <p style="margin:0px; border: none">Karang Taruna, Pelaihari, Tanah Laut, Pelaihari, Tanah Laut, Kabupatèn Tanah Laut, Kalimantan Kidul 70812</p>
                    </td>
                    <td style="width:20%; border: none"><img  class="bakti_husada" src="asset_template/images/logo.png" width="100%"></td>
                </tr>
            </table>
            <hr>
    </div>
    <div class="container" style="padding=0px; margin:0px">
        <div class="isi" style="padding=0px; margin:0px">
        <h3 class="headtext" style="text-align: center;">Data Detail Imunisasi</h3>
            <table style="border: none">
                <tr style="border: none">
                    <td style=" text-align: left; width: 24%;border: none;">Jenis Vaksin</td>
                    <td style="text-align: left; border: none">: {{$data->vaksin->nama_vaksin}}</td>
                </tr>
                <tr style="border: none"> 
                    <td style="text-align: left;border: none">Tanggal Imunisasi</td>
                    <td style="text-align: left; border: none">: {{Carbon\carbon::parse($data->tanggal_informasi)->translatedFormat('d F Y')}}</td>
                </tr>
                <tr style="border: none"> 
                    <td style="text-align: left;border: none">Tempat Imunisasi</td>
                    <td style="text-align: left; border: none">: {{$data->tempat_imunisasi}}</td>
                </tr>
                <tr style="border: none">
                    <td style="text-align: left; border: none">Nama Bidan </td>
                    <td style="text-align: left; border: none">: {{$data->bidan->nama}}</td>
                </tr>
            </table>
            <br>
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Anak</th>
                        <th>Jenis Kelamin</th>
                        <th>Nama Ibu</th>
                        <th>Tinggi</th>
                        <th>Berat</th>
                        <th>Umur</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kms as $k)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$k->anak->nama_anak}}</td>
                        <td>{{$k->anak->jk}}</td>
                        <td>{{$k->anak->nama_ibu}}
                        </td>
                        <td>{{$k->tinggi_badan}} cm</td>
                        <td>{{$k->berat_badan}} kg</td>
                        <td>{{$k->umur}} bulan</td>
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
                    Pelaihari , {{Carbon\carbon::now()->translatedFormat('d F Y')}}
                    <br><br>
                    <p style="margin:0px;">Kepala Puskesmas</p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p style="margin:0px;">.......................</p>
                    </td>
                </tr>
            </table>

        </div>
    </div>      
</body>
</html>