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
        font-size: 12px ;
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
         width:100px;
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
         float:right;
         margin-left: 0px;
         width: 80%;
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
         size: 21.5 cm  29 cm ; 
         margin: 1 cm 1 cm 0 cm 1 cm !important;
         padding: 0px !important;
         }
    </style>
</head>
<body>

    <div class="container" style="padding=0px; margin:0px">
     <br>
        <div class="isi" style="padding=0px; margin:0px">
         <div class="judul">
            <h4 style="margin:0px; ">DATA PEGAWAI</h4>
         </div>
         <div class="container" style="padding: 20px;">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Pegawai</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Tempat, Tanggal Lahir</th>
                            <th>No Hp</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $d)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$d->pegawai_id}}</td>
                            <td>{{$d->nama}}</td>
                            <td>{{$d->alamat}}</td>
                            <td>{{$d->jk}}</td>
                            <td>{{$d->tempat_lahir}},
                                {{carbon\carbon::parse($d->tgl_lahir)->translatedFormat('d M Y')}}</td>
                            <td>{{$d->no_hp}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
         </div>
        </div>
    </div>      
</body>
</html>