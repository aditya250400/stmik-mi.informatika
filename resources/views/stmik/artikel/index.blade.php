@extends('layouts.app')
@section('title', 'Artikel')
@section('artikel', 'active')
@section('artikel2', '/css/artikel.css')
@section('main')
<!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(/img/home-bg.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Artikel</h2>
              <p class="animate__animated animate__fadeInUp"><br><br>Jelajahi informasi melalui artikel yang tersedia atau buat artikel</p><br>
              <a href="{{ route('artikels.create') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Buat Artikel</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(/img/about-bg.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Artikel </h2>
              <p class="animate__animated animate__fadeInUp"><br>Jelajahi informasi melalui artikel yang tersedia atau buat artikel</p><br>
             
                <a href="{{ route('artikels.create') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Buat Artikel</a>
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
 <!-- Main Content-->
        <div class="container px-4 px-lg-5 mt-3">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    @if(session()->has('pesan'))
                        <div class="alert alert-success alert-dismissible w-50 mx-auto
                                   fade show">
                                <b>{{ session()->get('pesan') }}</b>
                            <button type="button" class="btn-close" data-bs-dismiss="alert">
                            </button>
                        </div>
                    @endif
                    @forelse($result as $value)
                        <!-- Post preview-->

                        <div class="post-preview">
                            <a href="{{ route('artikels.show', ['artikel' => $value->id]) }}">
                                <h2 class="post-title">{{ $value->judul }}</h2>
                                <h3 class="post-subtitle">{{ $value->sub_judul }}</h3>
                            </a>
                            <p class="post-meta">
                                Posted on
                                {{ date('F Y', strtotime($result[0]->created_at)) }}
                            </p>
                        </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    @empty
                        <p class="text-danger"><b>Tidak ada artkel. silakan buat artikel terlebih dahulu</b></p>
                    @endforelse
                    
                    <!-- Pager-->
                   
                </div>
            </div>
        </div>
       
@endsection