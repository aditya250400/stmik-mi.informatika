@extends('layouts.app')
@section('title', 'Edit')

@section('main')


<section class="vh-200 gradient-custom mt-5 breadcumps">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-8 col-md-8 col-lg-8 col-xl-7">
        <div class="card bg-white text-dark" style="border-radius: 2rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Update Data Diri</h2>
              <p class="text-dark-50 mb-5">Silakan Isi Data Dibawah</p>
              <div class="text-center">
                <img src="{{ asset('/img/Login1.png') }}" class="img-fluid">
              </div>

              <form action="{{ route('mahasiswa.update', ['mahasiswa' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3 row">
                  <label for="email" class="col-md-3 col-form-label text-md-end">
                    Email * </label>
                  <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email ?? '' }}" autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="nama" class="col-md-3 col-form-label text-md-end">
                    Nama *</label>
                  <div class="col-md-6">
                    <input id="nama" type="text" autocomplete="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $user->nama ?? '' }}">
                    @error('nama')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>


                <div class="mb-3 row">
                  <label for="nim" class="col-md-3 col-form-label text-md-end">
                    Nim </label>
                  <div class="col-md-6">
                    <input id="nim" type="text" class="form-control @error('nim') is-invalid @enderror" name="nim" value="{{ old('nim') ?? $user->nim ?? '' }}">
                    @error('nim')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="kelas" class="col-md-3 col-form-label text-md-end">Kelas</label>
                  <div class="col-md-6">
                    <div class="row g-2">
                      <div class="col-md-6">
                        @php
                          $kelas = [
                            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'
                          ];
                        @endphp
                        <select class="form-select" name="kelas">
                          @foreach($kelas as $value)
                            <option value="{{ $value }}" {{ (old('kelas') ?? $user->kelas) == $value ? 'selected' : '' }}>{{ $value }}</option>
                          @endforeach
                        </select>
                        @error('kelas')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                      <div class="col-md-6">
                        @php
                        // Tahun
                        $tahun = [
                        "Angkatan", 2019, 2020, 2021, 2022
                        ];
                        @endphp
                        <select class="form-select @error('angkatan') is-invalid @enderror" style="vertical-align: baseline;" name="angkatan" id="angkatan">
                          @for($i = 0; $i < 5; $i++) 

                            <option value="{{ $tahun[$i] }}" {{ (old('angkatan') ?? $user->angkatan) == $tahun[$i] ? 'selected' : '' }}>{{ $tahun[$i] }} </option>

                           @endfor
                        </select>
                        @error('angkatan')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mb-3 row">
                <label for="jurusan" class="col-md-3 col-form-label text-md-end">
                Jurusan </label>
                <div class="col-md-6">
                  @php
                    $jurusan = ['Sistem Informasi', 'Rekayasa Perangkat Lunak']
                  @endphp
                  <select class="form-select" name="jurusan">
                    @foreach($jurusan as $value)
                      <option value="{{ $value }}" {{ (old('jurusan') ?? $user->jurusan) == $value ? 'selected' : '' }}>{{ $value }}</option>
                    @endforeach
                  </select>
                  @error('jurusan')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

                <div class="mb-3 row">
                  <label for="bio_profil" class="col-md-3 col-form-label text-md-end">
                    Bio Profil</label>
                  <div class="col-md-6">
                    <textarea class="form-control" id="bio_profil" name="bio_profil" placeholder="Bio singkat anda...">{{
      old('bio_profil') ?? $user->bio_profil ?? ''
    }}</textarea>
                    @error('bio_profil')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="gambar_profil" class="col-md-3 col-form-label text-md-end">
                    Gambar Profil</label>
                  <div class="col-md-6">
                    <img id="display_gambar_profil" class="img-thumbnail w-28 mb-2" src="{{ asset('/img/user/'.$user->gambar_profil) }}">

                    <input type="file" id="gambar_profil" name="gambar_profil" accept="image/*" class="form-control @error('gambar_profil') is-invalid @enderror">
                    @error('gambar_profil')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="mb-3 row">
                  <label for="background_profil" class="col-md-3 col-form-label text-md-end">
                    Background Profil</label>
                  <div class="col-md-6">
                    <select name="background_profil" class="form-select col-md-5
    @error('background_profil') is-invalid @enderror" id="background_profil">
                      @for ($i = 1; $i <= 12; $i++) @if($i==(old('background_profil') ?? $user->background_profil ?? ''))
                        <option value="{{ $i }}" selected>{{ 'Gambar '.$i }}</option>
                        @else
                        <option value="{{ $i }}">{{ 'Gambar '.$i }}</option>
                        @endif
                        @endfor
                    </select>
                    @error('background_profil')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="my-2 row row-cols-3 g-1">
                      @for ($i = 1; $i <= 12; $i++) <div class="pilihan-background-profil">
                        <div class='overlay'>{{ $i }}</div>
                        <img class="col img-thumbnail" src="{{asset('img/gambar'.$i.'.jpg')}}">
                    </div>
                    @endfor
                  </div>
                </div>
            </div>



            <div class="mb-3 row mb-0">
              <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary px-4">Update</button>
              </div>
            </div>




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
    background: rgb(245, 81, 81);
    background: linear-gradient(90deg, rgba(245, 81, 81, 0.958420868347339) 0%, rgba(235, 15, 74, 1) 51%, rgba(255, 0, 0, 0.9108018207282913) 100%);
</style>

@endsection