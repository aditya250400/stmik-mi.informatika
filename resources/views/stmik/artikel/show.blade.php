@extends('layouts.app')
@section('title', 'Artikel')
@section('artikel', 'active')
@section('artikel2', '/css/artikel.css')
@section('main')
  <!-- Page Header-->
        <header class="masthead" style="background-image: url('/img/about-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1>{{ $result->judul }}</h1>
                            <h2 class="subheading">{{ $result->sub_judul }}</h2>
                            <span class="meta">
                                Posted 
                                {{ date('F Y', strtotime($result->created_at)) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7" >

                     

                      <h1>{{ $result->judul }}</h1>
                      <a href="{{ url('/img/artikel/'.$result->gambar_isi_artikel) }}" target="_blank"><img class="img-fluid" src="{{ url('/img/artikel/'.$result->gambar_isi_artikel) }}" alt="{{ $result->gambar_isi_artikel }}" /></a>


                        <p class="isi_artikel">{{ $result->isi_artikel }}</p>
                       <br>

                       <ul>
                           <li class="li">
                               <a href="{{ route('artikels.index') }}">
                                    <button class="btn btn-primary">
                                        <i class="fa-solid fa-chevron-left"></i> Kembali
                                    </button>
                                </a>
                           </li>
                           <li class="li">
                               <a href="{{ route('artikels.edit', ['artikel' => $result->id]) }}">
                                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">
                                        <i class="fa-solid fa-pen"></i> Edit Artikel Ini
                                    </button>
                                </a>
                           </li>
                           <li class="li">
                               @can('delete',$result)
                                   <button type="button" class="btn btn-danger" data-bs-toggle="modal" 
                                      data-bs-target="#DeleteModal">
                                      <i class="fa-solid fa-trash"></i> Hapus
                                  </button>
                              @endcan
                           </li>
                       </ul>
                        
                      
                    


                    </div>
                </div>
            </div>
        </article>


         <form method="POST" action="{{ route('artikels.destroy', ['artikel' => $result->id]) }}">
                        @csrf
                        @method('DELETE')

                            


            <div id="DeleteModal" class="modal fade" role="dialog">
              <div class="modal-dialog ">
              <!-- Modal content-->
                
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title text-center">Konfirmasi</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                  </div>
                  <div class="modal-body">
                    <p class="text-center mb-0">Anda yakin akan menghapus artikel ini?<br><i class="text-danger">Artikel ini tidak akan bisa di pulihkan setelah dihapus<br></i></p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                        Batal</button>
                    <button type="submit" class="btn btn-success" data-bs-dismiss="modal">
                        Ya, Hapus</button>
                        
                  </div>
                </div>
              </div>
            </div>


                      </form>
       
@endsection