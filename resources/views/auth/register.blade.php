@extends('layouts.app')
@section('title', 'Register')

@section('main')


<section class="vh-200 gradient-custom mt-5 breadcumps">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-8 col-md-8 col-lg-8 col-xl-7">
        <div class="card bg-white text-dark" style="border-radius: 2rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Form Pendaftaran</h2>
              <p class="text-dark-50 mb-5">Silakan Isi Data Dibawah</p>
              <div class="text-center">
                <img src="{{ asset('/img/Login1.png') }}" class="img-fluid">
              </div>

              <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                  
                  @include('layouts.form', ['tombol' => 'Daftar'])

              </form>


            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
.gradient-custom {
/* fallback for old browsers */
background: rgb(245,81,81);
background: linear-gradient(90deg, rgba(245,81,81,0.958420868347339) 0%, rgba(235,15,74,1) 51%, rgba(255,0,0,0.9108018207282913) 100%);</style>

@endsection
