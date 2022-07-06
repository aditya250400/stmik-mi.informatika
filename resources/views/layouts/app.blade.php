<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>STMIK Mardira Indonesia | @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('/img/MI2.jpg') }}" rel="icon">
  <link href="{{ asset('/img/MI2.jpg') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/ukm.css') }}" rel="stylesheet">
  <link href="{{ asset('/css/matkul.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ url('/css/profil.css') }}">
  <link rel="stylesheet" type="text/css" href="@yield('artikel2')">
  <link rel="stylesheet" type="text/css" href="@yield('tentang2')">

</head>
<body class="@yield('profile')">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><img src="{{ asset('/img/MI2.jpg') }}" align="left"><a href="/">STMIK Mardira<br>Indonesia</a></h1>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ Route('home') }}" class="@yield('beranda')">Beranda</a></li>
          <li class="dropdown"><a href="{{ route('tentang') }}" class="@yield('tentang')"><span>Tentang</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('tentang') }}">Tentang Kami</a></li>
              <li><a href="{{ route('mahasiswa.index') }}" class="@yield('mahasiswa')" >Mahasiswa</a></li>
            </ul>
          </li>
          <li><a href="{{ route('matakuliah') }}" class="@yield('matakuliah')">Mata Kuliah</a></li>
          <li><a href="{{ route('ukm') }}"  class="@yield('ukm')">UKM</a></li>
          <li><a href="{{ route('artikels.index') }}"  class="@yield('artikel')">Artikel</a></li>

          @guest
            @if(Route::has('login'))
              <li><a href="{{ Route('login') }}" class="getstarted">Masuk/Daftar</a></li>
            @endif

            @else
             
             <li class="dropdown"><a href="{{ route('mahasiswa.show', ['mahasiswa' => Auth::user()->id]) }}"><span><img class="rounded-circle z-depth-2 img-thumbnail img-nav" src="{{ asset('/img/user/'.Auth::user()->gambar_profil) }}"></span> <i class="bi bi-chevron-down"></a></i>
               <ul>
                  <li><span> </span><a href="{{ route('mahasiswa.show', ['mahasiswa' => Auth::user()->id]) }}">My Profile</a></li>
                  <li>
                      <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                    </li>
               </ul>
             </li>

          @endguest
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  @yield('main')


<br><br><br><br>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col"></div>
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>STMIK Mardira Indonesia</h3>
              <p>
                Jl. Soekarno Hatta No. 211, Leuwipanjang, Situsaeur, <br>
                Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat <br><br>
                <strong>Telp:</strong> (022)5230382<br>
                <strong>Email:</strong> info@stmik-mi.ac.id<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/stmik.mardira/" class="facebook" target="_blank"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/stmikmardira?igshid=YmMyMTA2M2Y=" class="instagram" target="_blank"><i class="bx bxl-instagram"></i></a>
              </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Tautan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('tentang') }}">Tentang</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('matakuliah') }}">Matakuliah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('ukm') }}">UKM</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('artikels.index') }}">Artikel</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Berlangganan via email</h4>
            <form action="{{ route('email.store') }}" method="POST">
              @csrf
              <input type="email" name="email">
              <input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        <strong><span>STMIK Mardira Indonesia</span></strong>
      </div>
      <div class="credits">
        2022
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('/vendor/php-email-form/validate.js') }}"></script>
  <script type="text/javascript" src="{{ asset('/js/gambarProfil.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="https://kit.fontawesome.com/15c201c20a.js" crossorigin="anonymous"></script>
  <script src="{{ asset('/js/main.js') }}"></script>
  <!-- JavaScript Bundle with Popper -->


</body>

</html>