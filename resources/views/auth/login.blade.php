
<!doctype html>
<html class="no-js h-100" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shards Dashboard Lite - Free Bootstrap Admin Template – DesignRevision</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{asset('asset_template/styles/all.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" id="main-stylesheet" data-version="1.1.0" href="{{asset('asset_template/styles/shards-dashboards.1.1.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset_template/styles/extras.1.1.0.min.css')}}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </head>
  <body class="h-100">
    <div class="container p-4"> 
        <br>
        <br>
        <br>
        <br>
      <div class="row">
            <div class="col-md ml-md-auto">
                <div  class="card card-small ">
                    <div class="card-body text-center">
                        <img id="main-logo" class="d-inline-block align-top" style="max-width:175px;" src="{{asset('asset_template/images/logo.png')}}" alt="Shards Dashboard">
                        <br>
                        <h5 class="card-title">
                        <a class="text-fiord-blue" href="#">Rancang Bangun Aplikasi Manajemen Imunisasi Pada puskesmas Pelaihari Berbasis Web</a>
                        </h5>
                        <p class="card-text d-inline-block mb-3">Silahkan login menggunakan username dan passwrod untuk mengakse aplikasi</p>
                        <br>
                        <form action="">
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
                                    <input type="password" class="form-control" id="form1-username" placeholder="Password"> 
                                </div>
                            </div>
                            <div class="text-right">
                                    <button type="button" class="btn  btn-secondary"><i class="material-icons">keyboard_arrow_left</i> Kembali</button>
                                    <button type="button" class="btn  btn-primary"><i class="material-icons">login</i> Login</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
    <script src="{{asset('asset_template/scripts/jquery.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/shards-ui@latest/dist/js/shards.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Sharrre/2.0.1/jquery.sharrre.min.js"></script>
    <script src="{{asset('asset_template/scripts/extras.1.1.0.min.js')}}"></script>
    <script src="{{asset('asset_template/scripts/shards-dashboards.1.1.0.min.js')}}"></script>
    <script src="{{asset('asset_template/scripts/app/app-blog-overview.1.1.0.js')}}"></script>
   
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
    @yield('scripts')
  </body>
</html>