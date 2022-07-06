@extends('layouts.app')
@section('title', 'Login')
@section('main')


<section class="vh-200 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-8 col-md-8 col-lg-8 col-xl-7">
        <div class="card bg-white text-dark" style="border-radius: 2rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">SELAMAT DATANG</h2>
              <p class="text-dark-50 mb-5">Silakan Masukan email dan password</p>
              <div class="text-center">
                <img src="{{ asset('/img/Login1.png') }}" class="img-fluid">
              </div>

              <form action="{{ route('login') }}" method="POST">
                    @csrf
              <div class="mb-3 row">
                <label for="email" class="col-md-4 col-form-label text-md-end">
              Email</label>
              <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email')
                is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>

            <div class="mb-3 row">
              <label for="password" class="col-md-4 col-form-label text-md-end">
              Password</label>
              <div class="col-md-6">
                <input id="password" type="password" class="form-control
                @error('password') is-invalid @enderror" name="password"
                required autocomplete="current-password">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
              <button class="btn btn-danger btn-dk px-5" type="submit">Login</button>
            
              <a href="{{ route('register') }}" class="btn btn-danger btn-dk px-5">Register</a>

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
