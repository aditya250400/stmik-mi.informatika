@extends('layouts.app')
@section('title', 'Mahasiswa')
@section('tentang', 'active')
@section('mahasiswa', 'active')

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
              <h2 class="animate__animated animate__fadeInDown"> Mahasiswa <span><p>STMIK Mardira Indonesia</p></span></h2>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(/img/slide/Web2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown"> Mahasiswa <span><p>STMIK Mardira Indonesia</p></span></h2>
              <br>
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

<!-- MEMBER LIST -->
<section id="member-list" class="py-5 bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col text-center" >
        <h1>Mahasiswa Kami</h1>
        <hr class="w-25 mx-auto">
        <p class="lead">Inilah Mahasiswa kami</p>

          {{-- Untuk flash message --}}
          @if(session()->has('pesan'))
            @if(session()->get('pesan')== 'update')
            <div class="alert alert-success alert-dismissible w-50 mx-auto
                       fade show">
              Data <b>{{session()->get('nama')}}</b> berhasil di update
              <button type="button" class="btn-close" data-bs-dismiss="alert">
              </button>
            </div>
            @endif
            @if(session()->get('pesan')== 'delete')
            <div class="alert alert-danger alert-dismissible w-50 mx-auto
                       fade show">
              Data <b>{{session()->get('nama')}}</b> sudah dihapus
              <button type="button" class="btn-close" data-bs-dismiss="alert">
              </button>
            </div>
            @endif
          @endif

      </div>
    </div>

    {{-- Proses looping untuk menampilkan semua user --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
      
      @forelse ($users as $user)
      <div class="col mt-3">
        <div class="card">
          <img class="card-img-top"
               src="{{ asset('img/gambar'.$user->background_profil.'.jpg')}}">
          <div class="card-body">
            <img src="{{ asset('img/user/'.$user->gambar_profil)}}"
                 class="rounded-circle img-thumbnail">
            <h5 class="card-title">{{$user->nama}}</h5>
            <p class="card-text">"{{$user->bio_profil  ?? '. . .'}}"</p>
            <ul class="fa-ul text-start">
              <li class="mb-2">
                <span class="fa-li"><i class="fa-solid fa-id-badge"></i></span>
                 {{ $user->nim }}
              </li>
              <li class="mb-2">
                <span class="fa-li"><i class="fa-solid fa-code"></i></span>
                {{$user->jurusan}}
              </li>
              <li class="mb-2">
                <span class="fa-li"><i class="fa-solid fa-school"></i></span>
                {{$user->kelas}}
              </li>
              <li class="mb-2">
                <span class="fa-li"><i class="far fa-clock"></i></span>
               	 Angkatan {{ $user->angkatan }}
              </li>
              <li class="mb-2">
                <span class="fa-li"><i class="fas fa-envelope"></i></span>
                {{$user->email}}
              </li>
            </ul>
            {{-- Tombol edit & hapus hanya untuk user sendiri atau admin --}}
            {{-- Ini menggunakan laravel policy --}}
            @can('update', $user)
            <div class="btn-action">
              <a href="{{ url('/mahasiswa/'.$user->id.'/edit') }}"
                 class="btn btn-primary d-inline-block">Edit</a>
              <button class="btn btn-danger btn-hapus" 
              data-id="{{$user->id}}" data-bs-toggle="modal" 
              data-bs-target="#DeleteModal">Hapus</button>
            </div>
            @endcan
          </div>
        </div>
      </div>
      @empty
        <p>Tidak ada data...</p>
      @endforelse
    </div>
  </div>

  {{-- Modal untuk konfirmasi proses delete --}}

<div id="DeleteModal" class="modal fade" role="dialog">
  <div class="modal-dialog ">
  <!-- Modal content-->
    <form action="" id="deleteForm" method="POST">
    @csrf
    @method('DELETE')
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title text-center">Konfirmasi</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal">
        </button>
      </div>
      <div class="modal-body">
        <p class="text-center mb-0">Anda yakin akan menghapus User ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">
            Cancel</button>
        <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">
            Ya, Hapus</button>
      </div>
    </div>
    </form>
  </div>
</div>

</section>
@endsection