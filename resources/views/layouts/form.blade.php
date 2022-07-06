@csrf
<div class="mb-3 row">
  <label for="email" class="col-md-3 col-form-label text-md-end">
    Email * </label>
  <div class="col-md-6">
    <input id="email" type="email"
    class="form-control @error('email') is-invalid @enderror"
    name="email" value="{{ old('email') ?? $user[0]->email ?? '' }}"
    autocomplete="email" autofocus>
    @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

{{-- Jika form ini untuk halaman register, maka tampilkan inputan password --}}
@if ($tombol == 'Daftar')

<div class="mb-3 row">
  <label for="password" class="col-md-3 col-form-label text-md-end">
  Password *</label>
  <div class="col-md-6">
    <input id="password" type="password"
    class="form-control @error('password') is-invalid @enderror"
    name="password" autocomplete="new-password">
    @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="mb-3 row">
  <label for="password-confirm" class="col-md-3 col-form-label text-md-end">
  Ulangi Password *</label>
  <div class="col-md-6">
    <input id="password-confirm" type="password" class="form-control"
    name="password_confirmation" autocomplete="new-password">
  </div>
</div>

@endif

<div class="mb-3 row">
  <label for="nama" class="col-md-3 col-form-label text-md-end">
  Nama *</label>
  <div class="col-md-6">
    <input id="nama" type="text" autocomplete="nama"
    class="form-control @error('nama') is-invalid @enderror"
    name="nama" value="{{ old('nama') ?? $user[0]->nama ?? '' }}">
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
    <input id="nim" type="text"
    class="form-control @error('nim') is-invalid @enderror"
    name="nim" value="{{ old('nim') ?? $user[0]->nim ?? '' }}">
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
          <option value="{{ $value }}"  {{ old('kelas') == $value ? 'selected' : '' }}>{{ $value }}</option>
        @endforeach
        </select>
        @error('kelas')
        <span>
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
          <option value="{{ $tahun[$i]}}"  {{ old('angkatan') == $tahun[$i] ? 'selected' : '' }}>{{ $tahun[$i] }}</option>

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
        <option value="{{ $value }}" {{ old('jurusan') == $value ? 'selected' : '' }}>{{ $value }}</option>
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
    <textarea class="form-control" id="bio_profil" name="bio_profil"
    placeholder = "Bio singkat anda...">{{
      old('bio_profil') ?? $user[0]->bio_profil ?? ''
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
    <img id="display_gambar_profil" class="img-thumbnail w-28 mb-2"
    @if ($tombol == 'Daftar')
      src="{{ asset('img/default_profile.jpg') }}"
    @elseif ($tombol == 'Update')
      src="{{ asset('storage/uploads/'.$user[0]->gambar_profil) }}"
    @endif
    >
    <input type="file" id="gambar_profil" name="gambar_profil" accept="image/*"
    class="form-control @error('gambar_profil') is-invalid @enderror">
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
    @error('background_profil') is-invalid @enderror" id="background_profil" >
      @for ($i = 1; $i <= 12; $i++)
        @if($i == (old('background_profil') ?? $user[0]->background_profil ?? ''))
          <option value="{{ $i }}" selected >{{ 'Gambar '.$i }}</option>
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
    @for ($i = 1; $i <= 12; $i++)
      <div class="pilihan-background-profil">
        <div class='overlay'>{{ $i }}</div>
        <img class="col img-thumbnail" src="{{asset('img/gambar'.$i.'.jpg')}}"
        >
      </div>
    @endfor
    </div>
  </div>
</div>



<div class="mb-3 row mb-0">
  <div class="col-md-6 offset-md-3">
    <button type="submit" class="btn btn-primary px-4">{{$tombol}}</button>
  </div>
</div>


