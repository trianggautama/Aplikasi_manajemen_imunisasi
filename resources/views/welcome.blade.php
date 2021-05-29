<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('template_depan/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template_depan/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template_depan/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('template_depan/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('template_depan/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v2.2.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h5 class="logo mr-auto"><a href="index.html">Aplikasi Manajemen Imunisasi</a></h5>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="about.html">Tenteng Aplikasi</a></li>
          <li><a href="contact.html">Rekap</a></li>
          <li><a href="contact.html">Kontak</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="{{Route('login')}}" class="get-started-btn">Login</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Puskesmas Pelaihari</h1>
      <h2>Aplikasi Manajemen Imunisasi Berbasis Web</h2>
      <a href="courses.html" class="btn-get-started">Pendaftaran Imunisasi</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>About Us</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{asset('template_depan/assets/img/about.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
            <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="icofont-check-circled"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="icofont-check-circled"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                pariatur.</li>
            </ul>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate
            </p>
            <a href="about.html" class="learn-more-btn">Learn More</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1232</span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">64</span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">42</span>
            <p>Events</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Trainers</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->
    <section>
      <div class="container" data-aos="fade-up">
        <div class="text-center">
          <h3>Pendaftaran Imunisasi</h3>
        </div>
        <br>
        <form action="{{Route('storePendaftaran')}}" method="POST">
          @csrf
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Anak" required />
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="nama_orang_tua" id="nama"
                placeholder="Nama Orang Tua (Ibu)" />
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir"
                required />
            </div>
            <div class="col-md-6 form-group">
              <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir"
                placeholder="Nama Orang Tua" required />
            </div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="alamat" rows="5" placeholder="Alamat" required></textarea>
          </div>
          <div class="form-group">
            <input type="text" name="nomor_telepon" class="form-control" id="nomor_telepon" placeholder="Nomor Telepon"
              required />
          </div>
          <div class="text-right"><button class="get-started-btn" type="submit">Kirim Pendaftaran</button></div>
        </form>
      </div>
    </section>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Mentor</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  @include('sweetalert::alert')
  <!-- Vendor JS Files -->
  <script src="{{asset('template_depan/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('template_depan/assets/vendor/aos/aos.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('template_depan/assets/js/main.js')}}"></script>

</body>

</html>