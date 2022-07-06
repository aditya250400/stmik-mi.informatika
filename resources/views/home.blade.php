
@extends('layouts.app')
@section('title', 'Beranda')
@section('beranda', 'active')

@section('main')
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(/img/slide/Web.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span><p>STMIK Mardira Indonesia</p></span></h2>
              <p class="animate__animated animate__fadeInUp"><br><br>STMIK Mardira Indonesia merupakan salah satu Perguruan Tinggi yang berada di kota Bandung tepatnya berada di Jl. Soekarno Hatta No. 211 Leuwipanjang, Situsaeur, Kec. Bojongloa Kidul, Kota Bandung, Jawa Barat 40233.</p>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(/img/slide/Web2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Teknik Informatika</h2>
              <p class="animate__animated animate__fadeInUp"><br>Teknik Informatika merupakan salah satu Program Studi di STMIK Mardira Indonesia yang terdiri dari 2 Program Studi yaitu, Sistem Informasi dan Rekayasa Perangkat Lunak.</p><br>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row content">
          <div class="col-lg-6">
            <br> <br> <br> <br>
            <h2>Teknik Informatika</h2>
            <p>Studi yang mempelajari tentang teknologi komputer baik dari Perangkat Keras (Hardware) maupun Perangkat Lunak (Software) dan juga mempelajari bagaimana menggunakan teknologi komputer secara optimal dengan tujuan menangani masalah transformasi atau pengolahan data dengan menggunakan logika.</p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <br> <br> <br> <br>
            <p>
              Program Studi Teknik Infromatika di STMIK Mardira Indonesia terdapat 2 Program Studi, yaitu Teknik Informatika S1 (Sistem Informasi dan rekayasa Perangkat Lunak) dan Teknik Informatika D3 (Sistem Informmasi dan Rekayasa Perangkat Lunak).
            </p>
            <p class="fst-italic">
              Selain mempelajari bidang utama, di STMIK MI juga memberikan wadah aktivitas kemahasiswaan untuk mengembangkan minat, bakat dan keahlian mahasiswa yaitu dengan membuka Unit Kegiatan Mahasiswa yang lebih dikenal UkM. UkM yang diberikan juga berkaitan dengan jurusan Teknik Informatika yaitu CSA, yang dapat anda ketahui lebih lanjut pada halaman UKM.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <br> <br> 
        <div class="row">
          <div class="col-md-6">
            <div class="icon-box">
              <i class="ri-check-double-line"></i>
              <h4><a href="#">Sistem Informasi</a></h4>
              <p class="ri-check-double-line">Menganalisis Sistem Informassi untuk menentukan metode yang terbaik dalam menyelesaikan masalah yang berkaitan dengan Sistem Inforrmasi.</p>
              <p class="ri-check-double-line">Membuat kerangka kerja atau framework terhadap sistem suatu organiasasi dengan mengimplementasikan Teknologi Informasi.</p>
              <p class="ri-check-double-line">Berfikir secara kritis untok menentukan solusi dari persoalan masyarakat yang berhubungan dengan disiplin ilmu Sistem Informasi.</p>
            </div>
          </div>
          <div class="col-md-6 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-check-double-line"></i>
              <h4><a href="#">Rekayasa Perangkat Lunak</a></h4>
              <p class="ri-check-double-line">Memberikan solusi sistem dengan penerapan Teknologi Informasi sesuai dengan bidang aplikasinya.</p>
              <p class="ri-check-double-line">Mempunyai daya inovasi yang kreatif dalam prihal penganalisaan, perangcangan, pemograman dan pengujian perangkat lunak sesuai dengan sprsifiasi kebutuhan sistem.</p>
              <p class="ri-check-double-line">Menjadikan Sarjana Informatika yang ahli dalam bidang Pembangunan Perangkat Lunak (Software Engineer).</p>
            </div>
          </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
@endsection