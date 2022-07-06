@extends('layouts.app')
@section('title', 'Artikel | Edit')
@section('artikel', 'active')
@section('artikel2', '/css/artikel.css')
@section('main')
    
    <section class="vh-200 gradient-custom mt-5 breadcumps">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-8 col-lg-8 col-lg-8 col-xl-7">
        <div class="card bg-white text-dark" style="border-radius: 2rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-7 mt-md-7 pb-7">

              <h2 class="fw-bold mb-2 text-uppercase">Artikel</h2>
              <p class="text-dark-50 mb-5">Silakan Isi Field dibawah</p>
              <div class="text-center">
                
              </div>

              <form action="{{ route('artikels.update', ['artikel' => $result->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-5 row">
                  <label for="judul" class="col-md-3 col-form-label text-md-end">
                    Judul * </label>
                  <div class="col-md-7">
                    <input id="text" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') ?? $result->judul ?? '' }}"  autofocus placeholder="Masukan Judul">
                    @error('judul')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="mb-5 row">
                  <label for="sub_judul" class="col-md-3 col-form-label text-md-end">
                    Sub Judul * </label>
                  <div class="col-md-7">
                    <textarea class="form-control txt @error('sub_judul') is-invalid @enderror" id="sub_judul" name="sub_judul" placeholder="Masukan Sub Judul Artikel">{{ old('sub_judul') ?? $result->sub_judul ?? '' }}</textarea>

                    @error('sub_judul')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
                
                
                <div class="mb-2 row">
                  <label for="isi_artikel" class="col-md-3 col-form-label text-md-end">
                    Isi Artikel *</label>
                  <div class="col-md-7">
                    <textarea class="form-control txt @error('isi_artikel') is-invalid @enderror" id="isi_artikel" name="isi_artikel" placeholder="Masukan Isi Artikel">{{ old('isi_artikel') ?? $result->isi_artikel ?? '' }}</textarea><br>
                     @error('isi_artikel')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                  
                </div>
                <div class="mb-3 row">
                    <div class="col md-7">
                        <img src="{{ url('/img/artikel/'.$result->gambar_isi_artikel) }}" id="gambarArtikel" class="img-fluid">
                    </div>
                </div>

                <div class="mb-5 row">
                  <label for="gambar_isi_artikel" class="col-md-5 col-form-label text-md-end">
                    Gambar Artikel</label>
                  <div class="col-md-7">
                    <input type="file" id="gambar_isi_artikel" name="gambar_isi_artikel" accept="image/*" class="form-control @error('gambar_isi_artikel') is-invalid @enderror" value="{{ old('gambar_isi_artikel') }}">
                    @error('gambar_isi_artikel')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <button type="submit" class="btn btn-success">Update</button>


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